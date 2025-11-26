<?php

// Обработка отправки формы
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($uri == 'send') {
	require __DIR__ . '/send.php';
	exit;
}

// Редирект на нужный язык
// $initLang = $_COOKIE['init_lang'] ?? null;
// if ($initLang) {
// 	if ($initLang != $currentLang) {
// 		header("Location: /$initLang", true, 302);
// 	}
// } else {
// 	$userLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);
// 	setcookie('init_lang', $userLang, time() + 3600 * 24 * 365, '/');
// 	if ($userLang != $currentLang) {
// 		header("Location: /$userLang", true, 302);
// 	}
// }


// if (in_array($userLang, $supportedLanguages) && $userLang !== $defaultLang) {
// 	setcookie('init_lang', $userLang, time() + 3600 * 24 * 365, '/');
// 	$currentUri = trim($_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI'], '/');

// 	header("Location: /$userLang/$currentUri", true, 302);
// }

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