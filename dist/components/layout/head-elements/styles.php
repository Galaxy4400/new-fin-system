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

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

<link rel="preload" href="/assets/css/tailwind.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="/assets/css/tailwind.min.css" /></noscript>
