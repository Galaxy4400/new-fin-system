<?php

// Обработка отправки формы
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($uri == 'send') {
	require __DIR__ . '/send.php';
	exit;
}

// Удаление лишних слэшей в URL
$normalized = preg_replace('#/+#', '/', $_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] !== $normalized) {
	header("Location: $normalized", true, 302);
	exit;
}

// Удаление языка из URL
// $segments = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
// if (isset($segments[0]) && in_array($segments[0], $supportedLanguages)) {
// 	$cleaned = '/' . implode('/', array_slice($segments, 1));
// 	if ($cleaned === '/') {
// 		header("Location: /", true, 302);
// 	} else {
// 		header("Location: $cleaned", true, 302);
// 	}
// 	exit;
// }

// Приведение URL к нижнему регистру
if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {
	$lowerUri = strtolower($_SERVER['REQUEST_URI']);
	$host = $_SERVER['HTTP_HOST'];
	header("Location: {$protocolType}://{$host}{$lowerUri}", true, 302);
	exit;
}