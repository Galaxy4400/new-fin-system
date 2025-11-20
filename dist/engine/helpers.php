<?php

/**
 * Генерирует <picture> сет для изображений jpg/png + webp + avif
 *
 * @param string $src Путь к базовому изображению (jpg или png)
 * @param string|null $class список классов для тега <picture>
 * @param array $attrs Дополнительные атрибуты для тега <img>
 * @return string Сформированный HTML <picture>
 */
function pictureSet(string $src, ?string $class = '', array $attrs = []): string
{
	$ext = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$base = substr($src, 0, - (strlen($ext) + 1));

	$variants = [
		'avif' => $base . '.avif',
		'webp' => $base . '.webp'
	];

	$sources = '';

	foreach ($variants as $type => $file) {
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) {
			$mime = "image/" . $type;
			$sources .= "<source type=\"$mime\" srcset=\"$file\">\n";
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
