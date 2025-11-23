<script>
  window.userCountry = '<?= t('v.country') ?>';
  window.languageList = <?= json_encode($supportedLanguages) ?>;
  window.defaultLang = '<?= $defaultLang ?>';
  window.currentLangJson = <?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/lang/' . $currentLang . '.json') ?>;
</script>

<script>
  document.documentElement.classList.add('loading');
  document.documentElement.classList.add('intltel-loading');

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

  waitForStylesheet('intlTelInput.min.css', () => {
    document.documentElement.classList.remove('intltel-loading');
  });
</script>

<link
  rel="prefetch"
  href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/utils.min.js"
  as="script"
  crossorigin="anonymous"
/>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/js/intlTelInput.min.js" defer></script>

<script src="/assets/js/geo.js" type="module"></script>
<script src="/assets/js/localization.js" type="module"></script>
<!-- <script src="/assets/js/currency.js" type="module"></script> -->
<script src="/assets/js/forms.js" type="module"></script>
<script src="/assets/js/scripts.js" type="module"></script>
