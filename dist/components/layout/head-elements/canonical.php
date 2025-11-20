<?php

$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$currentUri = rtrim($currentUri, '/');
$pathParts = array_filter(explode('/', $currentUri));

$currentLang = $lang;
$pagePath = '';

if (!empty($pathParts)) {
	$firstPart = reset($pathParts);
	if (in_array($firstPart, $supportedLanguages) && $firstPart !== $defaultLang) {
		array_shift($pathParts);
	} elseif ($firstPart === $defaultLang) {
		array_shift($pathParts);
	}
}
$pagePath = !empty($pathParts) ? implode('/', $pathParts) : '';

$currentPageUrl = 'https://' . $domain;
if ($currentLang !== $defaultLang) {
	$currentPageUrl .= '/' . $currentLang;
}
if ($pagePath) {
	$currentPageUrl .= '/' . $pagePath;
}
?>

<link rel="canonical" href="<?= htmlspecialchars($currentPageUrl) ?>" />
<link rel="alternate" hreflang="x-default" href="https://<?= $domain ?><?= $pagePath ? '/' . $pagePath : '' ?>" />

<?php foreach ($supportedLanguages as $langItem): $altUrl = 'https://' . $domain; if ($langItem !== $defaultLang) {
$altUrl .= '/' . $langItem; } if ($pagePath) { $altUrl .= '/' . $pagePath; } ?>
<link rel="alternate" hreflang="<?= htmlspecialchars($langItem) ?>" href="<?= htmlspecialchars($altUrl) ?>" />
<?php endforeach; ?>
