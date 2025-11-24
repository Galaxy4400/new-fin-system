<?php

$protocolType = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$pagePathWithoutLang = getPagePathWithoutLang();

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

function getDefaultPageUrl() {
	global $protocolType, $pagePathWithoutLang;

	return $protocolType . "://" . $_SERVER['HTTP_HOST'] . $pagePathWithoutLang ? '/' . $pagePathWithoutLang : '';
}

//---------------------------------------------------------------

function getCurrentPageUrl() {
	global $defaultLang, $pagePathWithoutLang, $currentLang, $protocolType;

	$currentPageUrl = $protocolType . '://' . $_SERVER['HTTP_HOST'];

	if ($currentLang !== $defaultLang) {
		$currentPageUrl .= '/' . $currentLang;
	}
	if ($pagePathWithoutLang) {
		$currentPageUrl .= '/' . $pagePathWithoutLang;
	}

	return $currentPageUrl;
}

//---------------------------------------------------------------

function getAltUrl($langItem) {
	global $defaultLang, $pagePath;

	$altUrl = 'https://' . $_SERVER['HTTP_HOST'];

	if ($langItem !== $defaultLang) { 
		$altUrl .= '/' . $langItem; 
	}

	if ($pagePath) { 
		$altUrl .= '/' . $pagePath; 
	}

	return $altUrl;
}

//---------------------------------------------------------------

function url($path = '', $query = '', $hash = '')
{
	global $currentLang, $defaultLang;

	$path = ltrim($path, '/');

	return ($currentLang === $defaultLang ? "/$path" : "/$currentLang/$path") . $query . $hash;
}
