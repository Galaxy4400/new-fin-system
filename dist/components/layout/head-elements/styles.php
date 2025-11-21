<style>
  html.loading {
    visibility: hidden;
  }
  html.loading *,
  html.loading *::before,
  html.loading *::after {
    animation: none !important;
    transition: none !important;
  }
</style>

<script>
  document.documentElement.classList.add('loading');
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
  function waitForStylesheet(href, callback) {
    var interval = setInterval(() => {
      for (var s of document.styleSheets) {
        if (s.href && s.href.includes(href)) {
          clearInterval(interval);
          callback();
        }
      }
    }, 10);
  }

  waitForStylesheet('tailwind.min.css', () => {
    document.documentElement.classList.remove('loading');
  });
</script>
