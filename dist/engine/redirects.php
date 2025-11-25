<?php

// Удаление лишних слэшей в URL
$normalized = preg_replace('#/+#', '/', $_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] !== $normalized) {
	header("Location: $normalized", true, 301);
	exit;
}

// Удаление языка из URL
$segments = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
if (isset($segments[1]) && in_array($segments[1], $supportedLanguages)) {
	$cleaned = '/' . $segments[0] . '/' . implode('/', array_slice($segments, 2));
	header("Location: $cleaned", true, 301);
	exit;
}

// Приведение URL к нижнему регистру
if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {
	$lowerUri = strtolower($_SERVER['REQUEST_URI']);
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
	$host = $_SERVER['HTTP_HOST'];
	header("Location: {$protocol}://{$host}{$lowerUri}", true, 301);
	exit;
}

// Обработка действий через параметр GET
if (isset($_GET['action']) && $_GET['action'] === 'send') {
	require __DIR__ . '/send.php';
	exit;
}
