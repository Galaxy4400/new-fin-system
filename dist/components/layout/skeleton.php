<div id="sk">
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
      box-sizing: content-box;
      padding-left: 1rem;
      padding-right: 1rem;
      height: 100%;
    }
    #sk-header {
      position: relative;
      z-index: 10;
      height: 4rem;
      background-color: #ffffff;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      box-shadow:
        0 1px 3px rgba(0, 0, 0, 0.1),
        0 1px 2px rgba(0, 0, 0, 0.06);
    }
    #sk-main {
      flex-grow: 1;
    }
    #sk-footer {
      background-color: #fff8f8;
      padding-top: 3.5rem;
      padding-bottom: 3.5rem;
    }
    #sk-main-head {
      background-color: #fff8f8;
      position: relative;
      overflow: hidden;
      padding-top: 1.25rem;
      padding-bottom: 1.25rem;
    }
    #sk-main-section {
      background: #fff;
    }
    #sk-header-body {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
    }

    #sk-logo {
      min-width: 100px;
    }

    #sk-menu {
      display: none;
    }

    #sk-actions {
      min-width: 200px;
    }

    #sk-main-head-body {
      position: relative;
      display: grid;
      gap: 1.75rem;
    }

    #sk-main-head-text {
      height: 100%;
      min-height: 600px;
    }

    #sk-main-head-form {
      max-width: unset;
      min-height: 600px;
      margin: unset;
    }

    .sk {
      background-color: #e5e7eb;
      border-radius: 0.25rem;
      min-height: 40px;
    }

    @media (min-width: 640px) {
      #sk-container {
        padding-left: 2rem;
        padding-right: 2rem;
      }
    }

    @media (min-width: 768px) {
      #sk-container {
        padding-left: 3rem;
        padding-right: 3rem;
      }

      #sk-header {
        height: 5rem;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
      }

      #sk-main-head {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
      }

      #sk-menu {
        display: inline-block;
        min-width: 300px;
      }

      #sk-main-head-body {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      #sk-main-head-form {
        max-width: 459px;
        min-height: 600px;
        margin: 0 0 0 auto;
      }
    }

    @media (min-width: 1024px) {
      #sk-container {
        padding-left: 4rem;
        padding-right: 4rem;
      }

      #sk-menu {
        min-width: 500px;
      }
    }

    @media (min-width: 1280px) {
      #sk-container {
        padding-left: 5rem;
        padding-right: 5rem;
      }
    }
  </style>

  <div id="sk-header">
    <div id="sk-container">
      <div id="sk-header-body">
        <div id="sk-logo" class="sk"></div>
        <div id="sk-menu" class="sk"></div>
        <div id="sk-actions" class="sk"></div>
      </div>
    </div>
  </div>
  <div id="sk-main">
    <div id="sk-main-head">
      <div id="sk-container">
        <div id="sk-main-head-body">
          <div>
            <div id="sk-main-head-text" class="sk"></div>
          </div>
          <div>
            <div id="sk-main-head-form" class="sk"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="sk-main-section">
      <div id="sk-container"></div>
    </div>
  </div>
  <div id="#sk-footer">
    <div id="sk-container">
      <div id="#sk-footer-body"></div>
    </div>
  </div>
</div>
