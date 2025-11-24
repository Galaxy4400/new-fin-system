<?php

$protocolType = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$pagePathWithoutLang = getPagePathWithoutLang();
$currentUrl = $protocolType . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$defaultPageUrl = $protocolType . "://" . $_SERVER['HTTP_HOST'] . $pagePathWithoutLang ? '/' . $pagePathWithoutLang : '';

//===============================================================

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
