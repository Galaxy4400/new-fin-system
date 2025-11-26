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
 * @param array|string       $attrs    Дополнительные атрибуты <img>
 * @param string|null $class    CSS-классы для <picture>
 * @param bool $lazy    режим лейзилоада. По умолчанию включён
 *
 * @return string HTML <picture>
 */
function pictureSet(string $fileName, array|string $attrs = "", ?string $class = '', ?bool $lazy = true): string
{
	$basePath = '/assets/img/formats/';
	$src = $basePath . $fileName;
	$ext  = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$baseFileName = substr($src, 0, -(strlen($ext) + 1));

	$avifSrcSet = $baseFileName . '.avif';
	$webpSrcSet = $baseFileName . '.webp';
	$fallbackSrc = $baseFileName . '.' . $ext;

	$dataLazy = $lazy ? "data-lazy" : "";
	$srcSetAttrKey = $lazy ? "data-srcset" : 'srcset';
	$srcAttrKey = $lazy ? "data-src" : 'src';

	$imgAttrs = getAttributes($attrs);

	return <<<HTML
<picture class="{$class}">
	<source type="image/avif" {$srcSetAttrKey}="{$avifSrcSet}">
	<source type="image/webp" {$srcSetAttrKey}="{$webpSrcSet}">
	<img {$srcAttrKey}="{$fallbackSrc}" {$imgAttrs} {$dataLazy}>
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
 *
 * @param string      $fileName Имя файла, например: "banner.png"
 * @param string|null $class    CSS-классы <picture>
 * @param array|string       $attrs    Дополнительные атрибуты <img>
 * @param string|null $sizes    sizes="..." (по умолчанию 100vw)
 * @param bool $lazy    режим лейзилоада. По умолчанию включён
 *
 * @return string HTML <picture>
 */
function pictureSetResponsive(
	string $fileName, 
	array|string $attrs = "", 
	?string $sizes = null,
	?string $class = '', 
	?bool $lazy = true): string
{
	$fallbackSize = $lazy ? 320 : 1280;
	$basePath = '/assets/img/responsive/';
	$src = $basePath . $fileName;
	$ext  = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$baseFileName = substr($src, 0, -(strlen($ext) + 1));
	$sizes = parseSizeBrakepoints($sizes);

	$avifSrcSet = getSrcSet($baseFileName, "avif");
	$webpSrcSet = getSrcSet($baseFileName, "webp");
	$imgSrcSet = getSrcSet($baseFileName, $ext);

	$fallbackSrc = $baseFileName . "-{$fallbackSize}." . $ext;
	$dataLazy = $lazy ? "data-lazy" : "";
	$srcSetAttrKey = $lazy ? "data-srcset" : 'srcset';
	$srcAttrKey = $lazy ? "data-src" : 'src';
	$sizesAttrKey = $lazy ? "data-sizes" : 'sizes';

	$imgAttrs = getAttributes($attrs);

	return <<<HTML
<picture class="{$class}">
	<source type="image/avif" {$srcSetAttrKey}="{$avifSrcSet}" {$sizesAttrKey}="{$sizes}">
	<source type="image/webp" {$srcSetAttrKey}="{$webpSrcSet}" {$sizesAttrKey}="{$sizes}">
	<img {$srcAttrKey}="{$fallbackSrc}" {$srcSetAttrKey}="{$imgSrcSet}" {$sizesAttrKey}="{$sizes}" {$imgAttrs} {$dataLazy}>
</picture>
HTML;
}

// size brakepoints parser
// you can use format like this: 1200:800px,768:458px,100%
function parseSizeBrakepoints($sizes = null) {
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

	return $sizes;
}

function getSrcSet($baseFileName, $ext, $sizesList = [320, 640, 1280]) {
	$srcsetParts = [];

	foreach ($sizesList as $size) {
		$file = $baseFileName . "-{$size}." . $ext;
		$srcsetParts[] = "{$file} {$size}w";
	}

	return implode(', ', $srcsetParts);
}

function getAttributes($attrs) {
	if (is_string($attrs)) {
		return $attrs;
	}

	$attrsStr = "";

	foreach ($attrs as $key => $value) {
		$attrsStr .= "$key=\"$value\"";
	}

	return $attrsStr;
}

//===============================================================
function getEmail() {
	global $translations;

	return getValueByPath($translations, 'v.email') . $_SERVER['HTTP_HOST'];
}