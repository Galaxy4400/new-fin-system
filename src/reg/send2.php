<?php
require_once 'aff.php';


$response_http_code = doRequest();

die(json_encode([
	"success" => $response_http_code == 200 ? true : false,
	"http_code" => $response_http_code,
]));





function getURL() {
	return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'];
}


function getPostData() {
	$apiData = [
		'name' => $_POST['name'] ?? 'empty',
		'email' => $_POST['email'] ?? 'empty',
		'message' => $_POST['message'] ?? 'empty',
		'url' => getURL(),
	];

	return json_encode($apiData);
}


function getHeaders() {
	global $api_key;

	return [
		'api-key: ' . $api_key,
		'Content-type: application/json'
	];
}


function doRequest() {
	global $URL2;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_URL, $URL2);
	curl_setopt($ch, CURLOPT_POSTFIELDS, getPostData());
	curl_setopt($ch, CURLOPT_HTTPHEADER, getHeaders());
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

	$response = curl_exec($ch);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	return $http_code;
}