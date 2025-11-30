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

  #skeleton {
    background: #fff8f8;
    min-height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
  }

  #sk-container {
    max-width: 1224px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
    height: 100%;
  }

  #sk-header {
    position: relative;
    z-index: 10;
    height: 4rem;
    background-color: #ffffff;
    height: 100%;
  }

  #sk-body {
    display: flex;
    align-items: center;
    height: 100%;
    font-size: 18px;
  }

  @media (min-width: 768px) {
    #sk-header {
      height: 5rem;
    }
  }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

<link rel="preload" href="/assets/css/tailwind.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="/assets/css/tailwind.min.css" /></noscript>
