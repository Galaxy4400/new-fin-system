<script>
  window.userCountry = '<?= t('v.country') ?>';
  window.languageList = <?= json_encode($supportedLanguages) ?>;
  window.defaultLang = '<?= $defaultLang ?>';
</script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.iife.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/intlTelInput.min.js" defer></script>

<script src="/assets/js/localization.js" type="module"></script>
<script src="/assets/js/currency.js" type="module"></script>
<script src="/assets/js/forms.js" type="module"></script>
<script src="/assets/js/scripts.js" type="module"></script>
