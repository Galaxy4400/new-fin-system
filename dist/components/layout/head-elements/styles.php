<style>
  html.loading body > *:not(#skeleton) {
    visibility: hidden !important;
  }
  html.loading body *,
  html.loading body *::before,
  html.loading body *::after {
    animation: none !important;
    transition: none !important;
  }
</style>

<link rel="preload" href="/assets/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin />

<link
  rel="preload"
  href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/css/intlTelInput.min.css"
  as="style"
  crossorigin="anonymous"
  onload="this.onload=null;this.rel='stylesheet'"
/>
<noscript
  ><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.5/build/css/intlTelInput.min.css"
/></noscript>

<link rel="preload" href="/assets/css/tailwind.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="/assets/css/tailwind.min.css" /></noscript>

<link rel="prefetch" href="/lang/<?= $currentLang ?>.json" as="fetch" crossorigin="anonymous" />
