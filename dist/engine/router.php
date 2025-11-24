<?php

$pagePath = getNormalizePagePath();

//===============================================================

function getNormalizePagePath() {
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

function getCurrentPageUrl() {
	global $domain, $defaultLang, $pagePath, $currentLang;

	$currentPageUrl = 'https://' . $domain;

	if ($currentLang !== $defaultLang) {
		$currentPageUrl .= '/' . $currentLang;
	}
	if ($pagePath) {
		$currentPageUrl .= '/' . $pagePath;
	}

	return $currentPageUrl;
}

//---------------------------------------------------------------

function getAltUrl($langItem) {
	global $domain, $defaultLang, $pagePath;

	$altUrl = 'https://' . $domain;

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
