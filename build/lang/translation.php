<?php

$langFiles = glob(__DIR__ . '/langs/*.json');

$supportedLanguages = array_map(function ($file) {
	return pathinfo($file, PATHINFO_FILENAME);
}, $langFiles);

$uri = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($uri, '/'));
$firstSegment = $segments[0] ?? '';

global $lang;

$lang = in_array($firstSegment, $supportedLanguages) ? $firstSegment : $defaultLang;

$translations = [];
$langFile = __DIR__ . "/langs/{$lang}.json";

if (file_exists($langFile)) {
	$jsonContent = file_get_contents($langFile);
	$translations = json_decode($jsonContent, true);

	if (json_last_error() !== JSON_ERROR_NONE) {
		error_log("Failed to parse {$langFile}: " . json_last_error_msg());
		$translations = [];
	}
}

$commonKeys = [
	'{site_name}' => $offer_name,
	'{country}' => getValueByPath($translations, 'v.country'),
];

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


function t($key, $vars = [])
{
	global $translations, $commonKeys;

	$translation = getValueByPath($translations, $key);

	if (!$translation) return $key;

	$translation = strtr($translation, array_merge($vars, $commonKeys));

	return $translation;
}
