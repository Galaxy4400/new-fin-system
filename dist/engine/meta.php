<?php

$meta = [
	'title' => t('t.meta.title', ['{year}' => date("Y")]),
	'description' => t('t.meta.description'),
	'twitter_title' => t('t.meta.twitter_title', ['{year}' => date("Y")]),
	'twitter_description' => t('t.meta.twitter_description'),
	'og_title' => t('t.meta.og_title', ['{year}' => date("Y")]),
	'og_description' => t('t.meta.og_description'),
];

$metaMap = [
	'privacy' => [
		'title' => t('t.meta.title_privacy'),
		'description' => t('t.meta.description_privacy'),
	],
	'conditions' => [
		'title' => t('t.meta.title_conditions'),
		'description' => t('t.meta.description_conditions'),
	],
	'404' => [
		'title' => t('t.meta.title_404'),
		'description' => t('t.meta.description_404'),
	],
];

function definePageMeta($page = null) {
	global $meta, $metaMap;

	$pageMeta = $metaMap[$page] ?? [];

	$meta = array_merge($meta, $pageMeta);
}