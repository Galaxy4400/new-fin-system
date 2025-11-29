<script>
  window.userCountry = '<?= t('v.country') ?>';
  window.languageList = <?= json_encode($supportedLanguages) ?>;
  window.defaultLang = '<?= $defaultLang ?>';
  window.translations = <?= json_encode($translations['t']['response']) ?>;
</script>

<script>
  document.documentElement.classList.add('loading');

  const waitForStylesheet = (href, cb) => {
    const id = setInterval(() => {
      if ([...document.styleSheets].some((s) => s.href && s.href.includes(href))) {
        clearInterval(id);
        cb();
      }
    }, 10);
  };

  waitForStylesheet('tailwind.min.css', () => {
    document.documentElement.classList.remove('loading');
    document.getElementById('skeleton').remove();
  });
</script>

<script src="/assets/js/lazyload.min.js" defer></script>
<script src="/assets/js/scripts.js" defer></script>

<script>
  async function deferdScripts() {
    await Promise.all([
      import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/intlTelInput.min.js'),
      import('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js'),
      import('/assets/js/geo.js'),
      import('/assets/js/currency.js'),
      import('/assets/js/forms.js'),
    ]);

    window.geo.init().then(() => Promise.all([window.currency.init(), window.forms.init()]));
  }

  if ('requestIdleCallback' in window) {
    requestIdleCallback(deferdScripts, { timeout: 3000 });
  } else {
    setTimeout(deferdScripts, 1000);
  }
</script>
