<?php

$protocolType = detectProtocol();
$pagePathWithoutLang = getPagePathWithoutLang();
$currentUrl = $protocolType . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$defaultPageUrl = $protocolType . "://" . $_SERVER['HTTP_HOST'] . ($pagePathWithoutLang ? '/' . $pagePathWithoutLang : '');
$pageFileName = getPageFileName();

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
	$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$parts = $path ? explode('/', $path) : [];

	if (!empty($parts)) {
		$first = $parts[0];

		if (langSupport($first)) {
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
function getPageFileName() {
	global $pagePathWithoutLang;

	if ($pagePathWithoutLang === '') {
		definePageMeta();
		return 'pages/home.php';
	}

	$pageFile = 'pages/' . $pagePathWithoutLang . '.php';

	if (file_exists($pageFile)) {
		definePageMeta($pagePathWithoutLang);
		return $pageFile;
	}

	definePageMeta('404');
	http_response_code(404);
	return 'pages/404.php';
}