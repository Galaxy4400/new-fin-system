<script type="application/ld+json">
  {
  	"@context": "https://schema.org/",
  	"@type": "SoftwareApplication",
  	"name": "<?= $offer_name ?>",
  	"url": "<?= $currentUrl ?>",
  	"logo": "https://<?= $domain ?>/assets/img/favicon.ico",
  	"image": "https://<?= $domain ?>/assets/img/og-img.png",
  	"description": "<?= t('t.meta.description') ?>",
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
  		"name": "<?= $offer_name ?>"
  	}
  }
</script>
