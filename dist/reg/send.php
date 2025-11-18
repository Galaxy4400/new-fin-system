<?php
require_once 'aff.php';

define("INVALID_AUTH_ERROR_CODE", "invalid_auth");
define("INVALID_PARAMS_ERROR_CODE", "invalid_params");
define("LEAD_DECLINED_ERROR_CODE", "lead_declined");

$log_entry = array();

function generate_password()
{
	$length = rand(8, 12);

	$lowercase = 'abcdefghijklmnopqrstuvwxyz';
	$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$digits = '0123456789';
	$all = $lowercase . $uppercase . $digits;

	$password = '';
	$password .= $lowercase[rand(0, strlen($lowercase) - 1)];
	$password .= $uppercase[rand(0, strlen($uppercase) - 1)];
	$password .= $digits[rand(0, strlen($digits) - 1)];

	for ($i = 3; $i < $length; $i++) {
		$password .= $all[rand(0, strlen($all) - 1)];
	}

	$password = str_shuffle($password);

	return $password;
}

function isEmailDeliverable($email)
{
	$result = false;
	$domain = substr(strrchr($email, "@"), 1); // Extract the domain from the email
	if (!getmxrr($domain, $mxhosts)) {
		return false; // No MX records found, email undeliverable
	}
	$mxhost = $mxhosts[0]; // Use the first MX record

	$connect = @fsockopen($mxhost, 25, $errno, $errstr, 5);
	if (!$connect) {
		return false; // Could not connect, email undeliverable
	}

	// Read greeting
	stream_set_timeout($connect, 5);
	fgets($connect, 1024);

	// Proceed with SMTP dialogue
	fputs($connect, "HELO $domain\r\n");
	fgets($connect, 1024);
	fputs($connect, "MAIL FROM: <check@$domain>\r\n");
	fgets($connect, 1024);
	fputs($connect, "RCPT TO: <$email>\r\n");
	$response = fgets($connect, 1024);

	fputs($connect, "QUIT\r\n");
	fclose($connect);

	if (strpos($response, '250') === 0) {
		$result = true;
	}

	return $result;
}

function doubleCheck($email)
{
	$eapikey = "w1So9FnULzT7rfT2tUK9gLXkK1JqGDu2hQQti6Ya";
	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://api.usebouncer.com/v1.1/email/verify?email=" . $email,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"x-api-key: $eapikey"
		],
	]);

	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	$result = json_decode($response, true);
	return $result['status'];
}

function emailCheck($email)
{
	$eCheck = false;
	$emailStatus = doubleCheck($email);
	if ($emailStatus === 'deliverable' || $emailStatus === 'risky' || $emailStatus === 'unknown') {
		$eCheck = true;
	}
	return $eCheck;
}


function logRequest($data)
{
	$publicHtmlPath = __DIR__ . '/../';
	$logDir = $publicHtmlPath . 'logs';
	if (!is_dir($logDir)) {
		mkdir($logDir, 0755, true);
	}
	$logFile = $logDir . '/' . date('Y-m-d') . '.log';
	file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ' . json_encode($data) . PHP_EOL, FILE_APPEND);
}


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['full_phone'];
$country_phone_code = $_POST['country_code'];
$phone_short = $_POST['phone'];

$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$ipArray = explode(',', $ip);
$firstIp = trim($ipArray[0]);

$validation_errors = array();
if (empty($first_name)) {
	$validation_errors["first_name"] = "First name is required.";
}
if (empty($last_name)) {
	$validation_errors["last_name"] = "Last name is required.";
}
// if (!emailCheck($email)) {
//     $validation_errors["email"] = "Please enter a valid email address";
// }
if (empty($email)) {
	$validation_errors["email"] = "Email address is required.";
}
if (empty($phone)) {
	$validation_errors["phone"] = "Phone number is required.";
}
if (!empty($validation_errors)) {
	echo json_encode(array(
		"success" => false,
		"code" => INVALID_PARAMS_ERROR_CODE,
		"errors" => $validation_errors,
	));
	die();
}

$password = generate_password();

$apiData = [
	'first_name' => $first_name ?? 'empty',
	'last_name' => $last_name  ?? 'empty',
	'email' => $email ?? 'empty',
	'password' => $password,
	'phone' => $phone ?? 'empty',
	'phone_code' => $country_phone_code ?? 'empty',
	'ip' => $firstIp,
	'affiliate_id' => $aff_id,
	'offer_id' => '2',
	'aff_sub' => $_POST['subid'] ?? 'empty',
	'aff_sub2' => '',
	'aff_sub3' => $_POST['offer_name'] ?? 'No name',
	'aff_sub4' => $_POST['id'] ?? 'empty',
	'aff_sub5' => isset($_GET['test']) ? $_GET['test'] : '',
	'aff_sub11' => 'seo',
	'aff_sub14' => $_POST['language'] ?? 'empty'
];


$headers = [
	'Authorization: ' . $authToken,
	'Content-type: application/json'
];

$postdata = json_encode($apiData);

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$log_entry["request"] = $apiData;
$log_entry["response"] = json_decode($response, true);
$log_entry["http_code"] = $http_code;

logRequest($log_entry);

$payload = array(
	"success" => false,
	"http_code" => $http_code,
);

$decodedResponse = json_decode($response, true); // decode as array

switch ($http_code) {
	case 401:
		$payload["success"] = false;
		$payload["code"] = INVALID_AUTH_ERROR_CODE;
		break;
	case 400:
		$payload["success"] = false;
		$payload["code"] = INVALID_PARAMS_ERROR_CODE;

		if (isset($decodedResponse['validation_errors'])) {
			$payload["errors"] = $decodedResponse['validation_errors'];
		} elseif (isset($decodedResponse['message'])) {
			$payload["errors"] = $decodedResponse['message'];
		}
		break;
	case 200:
	case 201:
		$payload["success"] = true;
		$decodedResponse = json_decode($response, true);
		if (!empty($decodedResponse['auto_login_url'])) {
			$payload["auto_login_url"] = $decodedResponse['auto_login_url'];
		}
	case 500:
		break;
}

$encoded_payload = json_encode($payload);

echo $encoded_payload;
die();
