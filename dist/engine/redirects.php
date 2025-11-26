<?php

// Обработка отправки формы
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($uri == 'send') {
	require __DIR__ . '/send.php';
	exit;
}

// Редирект на нужный язык
$initLang = isset($_COOKIE['init_lang']) ? $_COOKIE['init_lang'] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);
if ($initLang != $currentLang) {
	if (langSupport($initLang)) {
		setcookie('init_lang', $initLang, time() + 3600 * 24 * 365, '/');
		header("Location: /$initLang/$pagePathWithoutLang", true, 302);
	}
}

// Удаление лишних слэшей в URL
$normalized = preg_replace('#/+#', '/', $_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] !== $normalized) {
	header("Location: $normalized", true, 301);
	exit;
}

// Приведение URL к нижнему регистру
if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {
	$lowerUri = strtolower($_SERVER['REQUEST_URI']);
	$host = $_SERVER['HTTP_HOST'];
	header("Location: {$protocolType}://{$host}{$lowerUri}", true, 301);
	exit;
}