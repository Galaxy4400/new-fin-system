<script type="application/ld+json">
  {
  	"@context": "https://schema.org/",
  	"@type": "SoftwareApplication",
  	"name": "<?= htmlspecialchars($offer_name) ?>",
  	"url": "<?= htmlspecialchars($currentPageUrl) ?>",
  	"logo": "https://<?= $domain ?>/assets/img/favicon.ico",
  	"image": "https://<?= $domain ?>/assets/img/twitter_image.png",
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
