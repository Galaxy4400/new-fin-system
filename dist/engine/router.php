<?php

$requestUri = $_SERVER['REQUEST_URI'];

$normalized = preg_replace('#/+#', '/', $requestUri);
if ($requestUri !== $normalized) {
	header("Location: $normalized", true, 301);
	exit;
}

$segments = explode('/', trim($requestUri, '/'));
$firstSegment = $segments[0] ?? '';

if (isset($segments[1]) && in_array($segments[1], $supportedLanguages)) {
	$cleaned = '/' . $segments[0] . '/' . implode('/', array_slice($segments, 2));
	header("Location: $cleaned", true, 301);
	exit;
}

if (preg_match('/[A-Z]/', $requestUri)) {
	$lowerUri = strtolower($requestUri);
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
	$host = $_SERVER['HTTP_HOST'];
	header("Location: {$protocol}://{$host}{$lowerUri}", true, 301);
	exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'send') {
	require __DIR__ . 'send.php';
	exit;
}

function url($path = '', $query = '', $hash = '')
{
	global $lang, $defaultLang;

	$path = ltrim($path, '/');

	return ($lang === $defaultLang ? "/$path" : "/$lang/$path") . $query . $hash;
}
