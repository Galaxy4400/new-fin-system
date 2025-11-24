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

<link rel="preload" href="/assets/css/tailwind.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="/assets/css/tailwind.min.css" /></noscript>
