<script>
  window.userCountry = '<?= t('v.country') ?>';
  window.languageList = <?= json_encode($supportedLanguages) ?>;
  window.defaultLang = '<?= $defaultLang ?>';
</script>

<script>
  async function loadFormPlugins() {
    await Promise.all([
      import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/intlTelInput.min.js'),
      import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js'),
    ]);

    await import('/assets/js/forms.js');
  }

  document.addEventListener('DOMContentLoaded', () => {
    if ('requestIdleCallback' in window) {
      requestIdleCallback(loadFormPlugins, { timeout: 3000 });
    } else {
      setTimeout(loadFormPlugins, 2000);
    }
  });
</script>

<script src="/assets/js/localization.js" type="module"></script>
<script src="/assets/js/currency.js" type="module"></script>
<script src="/assets/js/scripts.js" type="module"></script>
