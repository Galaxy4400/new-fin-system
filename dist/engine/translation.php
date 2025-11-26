<?php

$supportedLanguages = getSupportedLanguages();
$currentLang = getCurrentLang();
$translations = getTranslations();

//===============================================================

function langSupport($lang) {
	global $supportedLanguages;

	return in_array($lang, $supportedLanguages);
}

//---------------------------------------------------------------

function getSupportedLanguages() {
	$langFiles = glob(__DIR__ . '/../lang/*.json');

	$supportedLanguages = array_map(function ($file) {
		return pathinfo($file, PATHINFO_FILENAME);
	}, $langFiles);

	return $supportedLanguages;
}

//---------------------------------------------------------------

function getCurrentLang() {
	global $defaultLang;

	$uri = $_SERVER['REQUEST_URI'];
	$segments = explode('/', trim($uri, '/'));
	$firstSegment = $segments[0] ?? '';

	$currentLang = langSupport($firstSegment) ? $firstSegment : $defaultLang;

	return $currentLang;
}

//---------------------------------------------------------------

function getTranslations() {
	global $currentLang;

	$translations = [];

	$langFile = __DIR__ . "/../lang/{$currentLang}.json";

	if (file_exists($langFile)) {
		$jsonContent = file_get_contents($langFile);
		$translations = json_decode($jsonContent, true);

		if (json_last_error() !== JSON_ERROR_NONE) {
			error_log("Failed to parse {$langFile}: " . json_last_error_msg());
			$translations = [];
		}
	}

	return $translations;
}

//---------------------------------------------------------------

function t($key, $vars = [])
{
	global $translations, $offer_name;

	$commonKeys = [
		'{site_name}' => $offer_name, 
		'{country}' => getValueByPath($translations, 'v.country'),
		'{country_name}' => getValueByPath($translations, 'v.countryName'),
	];

	$translation = getValueByPath($translations, $key);

	if (!$translation) return $key;

	$translation = strtr($translation, array_merge($vars, $commonKeys));

	return $translation;
}

//---------------------------------------------------------------

function getValueByPath($arr, $path, $separator = '.')
{
	$keys = explode($separator, $path);

	foreach ($keys as $key) {
		if (!array_key_exists($key, $arr)) {
			return null;
		}
		$arr = $arr[$key];
	}

	return $arr;
}

//---------------------------------------------------------------

function flagUrl($lang) {
	switch ($lang) {
		case 'en': $lang = 'gb'; break;
		default: break;
	}

	return "https://flagcdn.com/$lang.svg";
}

//---------------------------------------------------------------