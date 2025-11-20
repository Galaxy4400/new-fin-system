<?php
/**
 * Генерирует простой <picture> сет:
 * - avif (если есть)
 * - webp (если есть)
 * - fallback (оригинал: jpg/png)
 *
 * Первый параметр — ТОЛЬКО имя файла, например: "banner.jpg"
 * Путь к файлам фиксирован: /assets/img/
 *
 * @param string      $fileName Имя файла (banner.jpg)
 * @param string|null $class    CSS-классы для <picture>
 * @param array       $attrs    Дополнительные атрибуты для <img>
 *
 * @return string HTML <picture>
 */
function pictureSet(string $fileName, ?string $class = '', array $attrs = []): string
{
	$basePath = '/assets/img/';

	$src = $basePath . $fileName;

	$ext  = strtolower(pathinfo($src, PATHINFO_EXTENSION)); // jpg/png
	$base = substr($src, 0, -(strlen($ext) + 1));           // /assets/img/banner

	$root = $_SERVER['DOCUMENT_ROOT'];

	$variants = [
		'avif' => $base . '.avif',
		'webp' => $base . '.webp',
	];

	$sources = '';

	// AVIF
	if (file_exists($root . $variants['avif'])) {
		$sources .= '<source type="image/avif" srcset="' . $variants['avif'] . '">' . PHP_EOL;
	}

	// WEBP
	if (file_exists($root . $variants['webp'])) {
		$sources .= '<source type="image/webp" srcset="' . $variants['webp'] . '">' . PHP_EOL;
	}

	// Атрибуты <img>
	$attrStr = '';
	foreach ($attrs as $key => $value) {
		$attrStr .= " $key=\"$value\"";
	}

	return <<<HTML
<picture class="{$class}">
	{$sources}
	<img src="{$src}"{$attrStr} />
</picture>
HTML;
}

//===============================================================
/**
 * Responsive <picture> с фиксированным набором размеров.
 *
 * Первый параметр — только имя файла: "banner.png"
 * Путь фиксирован: /assets/img/responsive/
 *
 * Автоматически пытается найти варианты:
 *  - banner-320.avif
 *  - banner-640.avif
 *  - banner-1280.avif
 *  - banner-1920.avif
 *
 * @param string      $fileName Имя файла, например: "banner.png"
 * @param string|null $class    CSS-классы <picture>
 * @param array       $attrs    Дополнительные атрибуты <img>
 * @param string|null $sizes    sizes="..." (по умолчанию 100vw)
 *
 * @return string HTML <picture>
 */
function pictureSetResponsive(string $fileName, ?string $class = '', array $attrs = [], ?string $sizes = null): string
{
	$basePath = '/assets/img/responsive/';
	$src = $basePath . $fileName;

	$ext  = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$base = substr($src, 0, -(strlen($ext) + 1));

	$root = $_SERVER['DOCUMENT_ROOT'];

	// фиксированный набор размеров
	$sizesList = [320, 640, 1280, 1920];

	// ПАРСЕР НОВОГО УДОБНОГО ФОРМАТА SIZES
	if (!$sizes) {
		$sizes = "100vw";
	} else {
		$parsed = [];
		$fallback = null;

		$lines = preg_split('/[\n,]+/', trim($sizes));

		foreach ($lines as $line) {
			$line = trim($line);
			if ($line === '') continue;

			// формат NNN: VALUE
			if (preg_match('/^(\d+)\s*:\s*(.+)$/', $line, $m)) {
				$breakpoint = (int)$m[1];
				$value = trim($m[2]);
				$parsed[] = "(min-width: {$breakpoint}px) {$value}";
			}
			else {
				// fallback, например "100vw"
				$fallback = $line;
			}
		}

		// финальный sizes
		$sizes = implode(', ', $parsed);
		if ($fallback) {
			$sizes .= ($sizes ? ', ' : '') . $fallback;
		}
	}

	$variants = [
		'avif' => '.avif',
		'webp' => '.webp',
	];

	$sources = '';

	// -----------------------------------------
	// AVIF + WEBP <source> блоки
	// -----------------------------------------
	foreach (['avif', 'webp'] as $type) {
		$mime = "image/$type";
		$srcsetParts = [];

		foreach ($sizesList as $size) {
			$file = $base . "-{$size}" . $variants[$type];
			if (file_exists($root . $file)) {
				$srcsetParts[] = "{$file} {$size}w";
			}
		}

		if (!empty($srcsetParts)) {
			$sources .= "<source type=\"{$mime}\" srcset=\"" . implode(', ', $srcsetParts) . "\" sizes=\"{$sizes}\">\n";
		}
	}

	// -----------------------------------------
	// Fallback <img>
	// -----------------------------------------
	$imgSrcset = [];
	foreach ($sizesList as $size) {
		$file = $base . "-{$size}." . $ext;
		if (file_exists($root . $file)) {
			$imgSrcset[] = "{$file} {$size}w";
		}
	}

	$defaultSize = 1280;
	if (!file_exists($root . ($base . "-1280." . $ext))) {
		foreach ($sizesList as $size) {
			if (file_exists($root . ($base . "-{$size}." . $ext))) {
				$defaultSize = $size;
				break;
			}
		}
	}

	$defaultSrc = $base . "-{$defaultSize}." . $ext;

	$imgTag = '<img src="' . $defaultSrc . '"';

	if (!empty($imgSrcset)) {
		$imgTag .= ' srcset="' . implode(', ', $imgSrcset) . '" sizes="' . $sizes . '"';
	}

	foreach ($attrs as $key => $value) {
		$imgTag .= " $key=\"$value\"";
	}

	$imgTag .= ' />';

	return <<<HTML
<picture class="{$class}">
	{$sources}
	{$imgTag}
</picture>
HTML;
}