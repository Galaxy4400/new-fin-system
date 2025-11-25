<?php

$protocolType = detectProtocol();
$pagePathWithoutLang = getPagePathWithoutLang();
$currentUrl = $protocolType . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$defaultPageUrl = $protocolType . "://" . $_SERVER['HTTP_HOST'] . ($pagePathWithoutLang ? '/' . $pagePathWithoutLang : '');

//===============================================================
function detectProtocol(): string
{
	if (
		(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
		(isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ||
		(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
		(isset($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on')
	) {
		return 'https';
	}

	return 'http';
}

//---------------------------------------------------------------
function getPagePathWithoutLang() {
	global $supportedLanguages;

	$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$parts = $path ? explode('/', $path) : [];

	if (!empty($parts)) {
		$first = $parts[0];

		if (in_array($first, $supportedLanguages)) {
			array_shift($parts);
		}
	}

	return implode('/', $parts);
}

//---------------------------------------------------------------
function getLocalizedUrl($langItem) {
	global $protocolType, $defaultLang, $pagePathWithoutLang;

	$url = $protocolType . '://' . $_SERVER['HTTP_HOST'];

	if ($langItem !== $defaultLang) $url .= '/' . $langItem;
	if ($pagePathWithoutLang) $url .= '/' . $pagePathWithoutLang;

	return $url;
}

//---------------------------------------------------------------
function url($path = '', $query = '', $hash = '')
{
	global $currentLang, $defaultLang;

	$path = ltrim($path, '/');

	return ($currentLang === $defaultLang ? "/$path" : "/$currentLang/$path") . $query . $hash;
}

//---------------------------------------------------------------
function pageDisplay() {
	$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	if ($uri === '') {
		include 'pages/home.php';
		exit;
	}

	$pageFile = 'pages/' . $uri . '.php';

	if (file_exists($pageFile)) {
		include $pageFile;
		exit;
	}

	http_response_code(404);
	include 'pages/404.php';
}