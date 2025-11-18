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

<head>
	<title><?= t('t.main.meta_title', ['{site_name}' => $offer_name, '{country}' => t('v.countryName'), '{year}' => date("Y")]) ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="isoCode" content="<?= t('v.country') ?>">
	<meta name="description" content="<?= t('t.main.meta_description', ['{site_name}' => $offer_name]) ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?= t('t.main.meta_twitter_title', ['{site_name}' => $offer_name, '{year}' => date("Y")]) ?>" />
	<meta name="twitter:description" content="<?= t('t.main.meta_twitter_description', ['{site_name}' => $offer_name]) ?>" />
	<meta name="twitter:image" content="https://<?= $domain ?>/public/img/twitter_image.png" />

	<!-- Open Graph Meta Tags -->
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= t('t.main.meta_og_site_name', ['{site_name}' => $offer_name]) ?>" />
	<meta property="og:url" content="<?= htmlspecialchars($currentPageUrl) ?>" />
	<meta property="og:title" content="<?= t('t.main.meta_og_title', ['{site_name}' => $offer_name, '{year}' => date("Y")]) ?>" />
	<meta property="og:description" content="<?= t('t.main.meta_og_description', ['{site_name}' => $offer_name]) ?>" />
	<meta property="og:image" content="https://<?= $domain ?>/public/img/twitter_image.png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:alt" content="<?= $offer_name ?>" />


	<!-- Canonical URL -->
	<link rel="canonical" href="<?= htmlspecialchars($currentPageUrl) ?>" />

	<!-- Hreflang Alternate Tags for Multi-language Support -->
	<!-- x-default points to the default language version -->
	<link rel="alternate" hreflang="x-default" href="https://<?= $domain ?><?= $pagePath ? '/' . $pagePath : '' ?>" />
	<?php foreach ($supportedLanguages as $langItem):
		$altUrl = 'https://' . $domain;
		if ($langItem !== $defaultLang) {
			$altUrl .= '/' . $langItem;
		}
		if ($pagePath) {
			$altUrl .= '/' . $pagePath;
		}
	?>
		<link rel="alternate" hreflang="<?= htmlspecialchars($langItem) ?>" href="<?= htmlspecialchars($altUrl) ?>" />
	<?php endforeach; ?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="/public/img/favicon.ico">
	<link rel="icon" type="image/x-icon" sizes="256x256" href="/public/img/favicon.ico">

	<!-- CSS with preload for better performance -->
	<link rel="preload" href="/public/css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="/public/css/style.min.css">
	</noscript>

	<!-- <link rel="preload" as="image" href="/public/img/main.webp" imagesrcset="/public/img/main.webp" imagesizes="100vw">
	<link rel="preload" as="image" href="/public/img/main-mobile.webp" imagesrcset="/public/img/main-mobile.webp" imagesizes="(max-width: 767px) 100vw, 100vw"> -->

	<!-- JavaScript Configuration -->
	<script>
		const COUNTRY = '<?= t('v.country') ?>';
		const LANGUAGE_LIST = <?= json_encode($supportedLanguages) ?>;
		window.DEFAULT_LANG = '<?= $defaultLang ?>';
	</script>

	<?php include 'blocks/scripts.php' ?>

	<!-- Structured Data (Schema.org) -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "SoftwareApplication",
			"name": "<?= htmlspecialchars($offer_name) ?>",
			"url": "<?= htmlspecialchars($currentPageUrl) ?>",
			"logo": "https://<?= $domain ?>/public/img/favicon.ico",
			"image": "https://<?= $domain ?>/public/img/twitter_image.png",
			"description": "<?= htmlspecialchars(t('t.main.meta_description', ['{site_name}' => $offer_name])) ?>",
			"applicationCategory": "FinanceApplication",
			"operatingSystem": "Web Browser",
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": <?= t('v.rating') ?>,
				"bestRating": <?= t('v.score') ?>,
				"worstRating": <?= t('v.worst') ?>,
				"ratingCount": <?= t('v.votes') ?>,
				"reviewCount": <?= t('v.reviews') ?>
			},
			"offers": {
				"@type": "Offer",
				"price": "<?= t('v.startAmount') ?>",
				"priceCurrency": "USD",
				"availability": "https://schema.org/InStock"
			},
			"author": {
				"@type": "Brand",
				"name": "<?= htmlspecialchars($offer_name) ?>"
			}
		}
	</script>
</head>