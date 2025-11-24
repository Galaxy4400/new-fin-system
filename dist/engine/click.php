<?php
$subid = fetchSubId($token);

function fetchSubId($token)
{
	if (
		php_sapi_name() === 'cli-server' || in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])
	) {
		return 'local';
	}

	// Get the real IP address
	$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	$ipArray = explode(',', $ip);
	$firstIp = trim($ipArray[0]);


	// Build the request parameters
	$params = [
		'token' => $token,
		'method' => 'POST',
		'ip' => $firstIp,
		'server' => [
			'remote_addr' => $firstIp
		],
		'headers' => [],
		'force_redirect_offer' => 1,
	];

	// Collect all headers from $_SERVER
	foreach ($_SERVER as $name => $value) {
		if (strstr($name, 'HTTP_')) {
			$headerName = strtolower(str_replace(['HTTP_', '_'], ['', '-'], $name));
			// Filter out specific headers that we'll set explicitly
			if (!in_array($headerName, ['connection', 'client-ip', 'x-forwarded-for'])) {
				$params['headers'][$headerName] = $value;
			}
		}
	}

	// Explicitly set important headers
	$params['headers']['x-real-ip'] = $firstIp;
	$params['headers']['x-forwarded-for'] = $firstIp;

	// Make sure user-agent is set
	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$params['headers']['user-agent'] = $_SERVER['HTTP_USER_AGENT'];
	} else {
		$params['headers']['user-agent'] = 'Mozilla/5.0';  // Default user agent if none provided
	}

	// Collect all subid parameters from $_GET
	foreach ($_GET as $key => $value) {
		if (preg_match('/^(sub_?id\d*|_?subid\d*)$/i', $key)) {
			$params[$key] = $value;
		}
	}

	// API endpoint
	$url = 'https://trckit.net/click_api/v3';

	// Initialize cURL session
	$curl = curl_init();

	// Set cURL options
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);

	// Execute cURL request
	$response = curl_exec($curl);

	// Check for errors
	if (curl_errno($curl)) {
		error_log('cURL Error: ' . curl_error($curl));
		curl_close($curl);
		return false;
	}

	// Close cURL session
	curl_close($curl);

	// Parse response
	$data = json_decode($response, true);

	// Debug output (comment out in production)
	// error_log('Request params: ' . print_r($params, true));
	// error_log('Response: ' . print_r($data, true));

	// Return subid if available
	if (isset($data['cookies']['_subid'])) {
		return $data['cookies']['_subid'];
	} else {
		return false;
	}
}
