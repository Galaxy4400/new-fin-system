<?php

//===============================================================
$pagePath = definePagePath();

function definePagePath() {
	global $supportedLanguages, $defaultLang;

	$path = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$pathParts = array_filter(explode('/', $path));

	$pagePath = '';

	if (!empty($pathParts)) {
		$firstPart = reset($pathParts);
		if (in_array($firstPart, $supportedLanguages) && $firstPart !== $defaultLang) {
			array_shift($pathParts);
		} elseif ($firstPart === $defaultLang) {
			array_shift($pathParts);
		}
	}

	$pagePath = !empty($pathParts) ? implode('/', $pathParts) : '';

	return $pagePath;
}


function getCurrentPageUrl() {
	global $domain, $defaultLang, $pagePath, $currentLang;

	$currentPageUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $domain;

	if ($currentLang !== $defaultLang) {
		$currentPageUrl .= '/' . $currentLang;
	}
	if ($pagePath) {
		$currentPageUrl .= '/' . $pagePath;
	}

	return $currentPageUrl;
}

function getAltUrl($langItem) {
	global $domain, $defaultLang, $pagePath;

	$altUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $domain;

	if ($langItem !== $defaultLang) { 
		$altUrl .= '/' . $langItem; 
	}

	if ($pagePath) { 
		$altUrl .= '/' . $pagePath; 
	}

	return $altUrl;
}

//===============================================================
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
	require __DIR__ . '/send.php';
	exit;
}

function url($path = '', $query = '', $hash = '')
{
	global $currentLang, $defaultLang;

	$path = ltrim($path, '/');

	return ($currentLang === $defaultLang ? "/$path" : "/$currentLang/$path") . $query . $hash;
}
