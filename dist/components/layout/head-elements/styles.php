<style>
  html.loading body > *:not(#sk) {
    visibility: hidden !important;
  }
  html.loading body *,
  html.loading body *::before,
  html.loading body *::after {
    animation: none !important;
    transition: none !important;
  }
</style>

<script>
  document.documentElement.classList.add('loading');
  document.documentElement.classList.add('intltel-loading');
</script>

<link
  rel="preload"
  href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/css/intlTelInput.css"
  as="style"
  crossorigin="anonymous"
  onload="this.onload=null;this.rel='stylesheet'"
/>
<noscript
  ><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/css/intlTelInput.min.css"
/></noscript>

<link rel="preload" href="/assets/css/tailwind.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="/assets/css/tailwind.min.css" /></noscript>

<script>
  function waitForStylesheet(href, cb) {
    const obs = new MutationObserver(() => {
      if ([...document.styleSheets].some((s) => s.href?.includes(href))) {
        obs.disconnect();
        cb();
      }
    });

    obs.observe(document.head, { childList: true, subtree: true });
  }

  waitForStylesheet('tailwind.min.css', () => {
    document.documentElement.classList.remove('loading');
    document.getElementById('sk').remove();
  });

  waitForStylesheet('intlTelInput.css', () => {
    document.documentElement.classList.remove('intltel-loading');
  });
</script>
