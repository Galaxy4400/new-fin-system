<?php

$pagePath = definePagePath();

//===============================================================

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
