<script>
  const COUNTRY = '<?= t('v.country') ?>';
  const LANGUAGE_LIST = <?= json_encode($supportedLanguages) ?>;
  window.DEFAULT_LANG = '<?= $defaultLang ?>';
</script>

<!-- <script src="/public/js/localization.js" type="module"></script>
<script src="/public/js/currency.js" type="module"></script>
<script src="/public/js/formsPlugin.js" type="module"></script>

<script src="/public/js/lazyload.min.js" defer></script>

<script src="/public/js/spoiler.js" defer></script>

<script src="/public/js/langSelect.js" defer></script>
<script src="/public/js/cookies.js" defer></script>
<script src="/public/js/functions.js" defer></script>
<script src="/public/js/scroll.js" defer></script>
<script src="/public/js/formsHandlers.js" defer></script>
<script src="/public/js/modals.js" defer></script>
<script src="/public/js/scripts.js" defer></script> -->

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/intlTelInput.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.js"></script>
