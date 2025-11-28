<head>
  <title><?= $meta['title'] ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="isoCode" content="<?= t('v.country') ?>" />
  <meta name="description" content="<?= $meta['description'] ?>" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $meta['twitter_description'] ?>" />
  <meta name="twitter:description" content="<?= $meta['twitter_description'] ?>" />
  <meta name="twitter:image" content="<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/og-img.png" />

  <!-- Open Graph Meta Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="<?= t('t.meta.og_site_name') ?>" />
  <meta property="og:url" content="<?= $currentUrl ?>" />
  <meta property="og:title" content="<?= $meta['og_description'] ?>" />
  <meta property="og:description" content="<?= $meta['og_description'] ?>" />
  <meta property="og:image" content="<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/og-img.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="<?= $offer_name ?>" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/img/favicon.ico" />
  <link rel="icon" type="image/x-icon" sizes="256x256" href="/assets/img/favicon.ico" />

  <!-- Canonical URL -->
  <link rel="canonical" href="<?= $currentUrl ?>" />
  <link rel="alternate" hreflang="x-default" href="<?= $defaultPageUrl ?>" />
  <?php foreach ($supportedLanguages as $langItem): ?>
  <link rel="alternate" hreflang="<?= $langItem ?>" href="<?= getLocalizedUrl($langItem) ?>" />
  <?php endforeach; ?>

  <!-- Styles -->
  <?php include 'head-elements/styles.php' ?>

  <!-- Scripts -->
  <?php include 'head-elements/scripts.php' ?>

  <!-- Structured Data (Schema.org) -->
  <?php include 'head-elements/schema.php' ?>
</head>
