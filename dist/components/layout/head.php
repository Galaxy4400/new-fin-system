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
	<meta name="twitter:image" content="https://<?= $domain ?>/assets/img/og-img.png" />

	<!-- Open Graph Meta Tags -->
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= t('t.main.meta_og_site_name', ['{site_name}' => $offer_name]) ?>" />
	<meta property="og:url" content="<?= htmlspecialchars($currentPageUrl) ?>" />
	<meta property="og:title" content="<?= t('t.main.meta_og_title', ['{site_name}' => $offer_name, '{year}' => date("Y")]) ?>" />
	<meta property="og:description" content="<?= t('t.main.meta_og_description', ['{site_name}' => $offer_name]) ?>" />
	<meta property="og:image" content="https://<?= $domain ?>/assets/img/og-img.png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:alt" content="<?= $offer_name ?>" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<link rel="icon" type="image/x-icon" sizes="256x256" href="/assets/img/favicon.ico">

	<!-- Canonical URL -->
	<link rel="canonical" href="<?= htmlspecialchars($currentPageUrl) ?>" />
	<link rel="alternate" hreflang="x-default" href="https://<?= $domain ?><?= $pagePath ? '/' . $pagePath : '' ?>" />
	<?php foreach ($supportedLanguages as $langItem): ?>
		<link rel="alternate" hreflang="<?= htmlspecialchars($langItem) ?>" href="<?= htmlspecialchars(getAltUrl($langItem)) ?>" />
	<?php endforeach; ?>

	<!-- Styles -->
	<?php include 'head-elements/styles.php' ?>
	
	<!-- Scripts -->
	<?php include 'head-elements/scripts.php' ?>

	<!-- Structured Data (Schema.org) -->
	<?php include 'head-elements/schema.php' ?>

</head>