<div
  id="skeleton"
  style="background: #fff8f8; min-height: 100vh; position: fixed; top: 0; left: 0; width: 100%; z-index: 999"
>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    #sk-container {
      max-width: 1224px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    #sk-header {
      position: relative;
      z-index: 10;
      height: 4rem;
      background-color: #ffffff;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    @media (min-width: 768px) {
      #sk-header {
        height: 5rem;
      }
    }
  </style>

  <div id="sk-header">
    <div id="sk-container"><?= $offer_name ?></div>
  </div>
</div>
