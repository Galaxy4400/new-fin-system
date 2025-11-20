<?php
/**
 * Генерирует <picture> сет для изображений:
 * - обычный (jpg/png + webp + avif)
 * - или responsive, если путь содержит "/responsive/"
 *
 * @param string      $src   Путь к базовому изображению (jpg или png)
 * @param string|null $class Список классов для <picture>
 * @param array       $attrs Доп. атрибуты для <img>
 * @return string
 */

function pictureSet(string $src, ?string $class = '', array $attrs = []): string
{
	$isResponsive = (strpos($src, '/responsive/') !== false);

	$ext = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$base = substr($src, 0, - (strlen($ext) + 1));

	$variants = [
		'avif' => '.avif',
		'webp' => '.webp',
	];

	// ===============================
	// Авто-определение доступных размеров
	// ===============================
	$sizes = [];

	if ($isResponsive) {
		// путь в ФС
		$dir = dirname($_SERVER['DOCUMENT_ROOT'] . $src);
		$filenameBase = basename($base); // deco-bg-main

		// список файлов в папке responsive
		foreach (glob($dir . '/' . $filenameBase . '-*') as $filePath) {

			// пример: deco-bg-main-1280.png
			$fileName = basename($filePath);

			// достаём число после дефиса
			if (preg_match('/-(\d+)\./', $fileName, $m)) {
				$size = intval($m[1]);
				if ($size > 0) {
					$sizes[] = $size;
				}
			}
		}

		// удаляем дубли, сортируем
		$sizes = array_unique($sizes);
		sort($sizes);
	}

	$sources = '';

	// ===============================
	// Responsive режим
	// ===============================
	if ($isResponsive && !empty($sizes)) {

		// AVIF + WEBP sources
		foreach (['avif', 'webp'] as $type) {
			$mime = "image/$type";
			$srcsetParts = [];

			foreach ($sizes as $size) {
				$file = $base . "-{$size}" . $variants[$type];
				if (file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) {
					$srcsetParts[] = "{$file} {$size}w";
				}
			}

			if (!empty($srcsetParts)) {
				$sources .= "<source type=\"{$mime}\" srcset=\"" . implode(', ', $srcsetParts) . "\" sizes=\"100vw\">\n";
			}
		}

		// fallback PNG/JPG тоже responsive
		$imgSrcset = [];
		foreach ($sizes as $size) {
			$file = $base . "-{$size}." . $ext;
			if (file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) {
				$imgSrcset[] = "{$file} {$size}w";
			}
		}

		// fallback src = медианная картинка (или последняя доступная)
		$defaultSize = $sizes[floor(count($sizes) / 2)] ?? end($sizes);
		$defaultSrc = $base . "-{$defaultSize}." . $ext;

		$imgTag = '<img src="' . $defaultSrc . '"';

		if (!empty($imgSrcset)) {
			$imgTag .= ' srcset="' . implode(', ', $imgSrcset) . '" sizes="100vw"';
		}

		// атрибуты img
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

	// ===============================
	// Обычный режим
	// ===============================

	foreach (['avif', 'webp'] as $type) {
		$file = $base . $variants[$type];
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) {
			$mime = "image/$type";
			$sources .= "<source type=\"{$mime}\" srcset=\"{$file}\">\n";
		}
	}

	$attrStr = '';
	foreach ($attrs as $key => $value) {
		$attrStr .= " $key=\"$value\"";
	}

	return <<<HTML
<picture class="{$class}">
	{$sources}
	<img src="{$src}" {$attrStr} />
</picture>
HTML;
}

