//===============================================================
const redirectToUserLanguage = () => {
  const userLang = (navigator.language || navigator.userLanguage).split('-')[0];

  const initLang = localStorage.getItem('init_lang');

  if (initLang || userLang === window.defaultLang || !window.languageList.includes(userLang)) return;

  localStorage.setItem('init_lang', userLang);

  window.location.replace(`${window.location.origin}/${userLang}`);
};

//===============================================================
const initConnectors = () => {
  document.querySelectorAll('[data-connector]').forEach((connector) => {
    let isOpen = false;

    const parent = connector.closest('[data-connect-parent]') || document;
    const target = parent.querySelector(`[data-connect="${connector.dataset.connector}"]`);

    if (!target) return;

    const toggle = (state) => {
      isOpen = state;
      connector.toggleAttribute('data-active', isOpen);
      target.toggleAttribute('data-active', isOpen);
    };

    connector.addEventListener('click', (e) => {
      e.stopPropagation();
      toggle(!isOpen);
    });

    target.addEventListener('click', (e) => {
      e.stopPropagation();
    });

    document.addEventListener('click', () => {
      if (isOpen) toggle(false);
    });
  });
};

//===============================================================
const initMobuleMenu = () => {
  let isOpen = false;

  const icon = document.querySelector('[data-menu-icon]');
  const menu = document.querySelector('[data-mobile-menu]');

  const toggleMenu = (state) => {
    isOpen = state;

    icon.toggleAttribute('data-active', isOpen);
    menu.toggleAttribute('data-active', isOpen);
  };

  icon.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu(!isOpen);
  });

  menu.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    if (isOpen) toggleMenu(false);
  });
};

//===============================================================
const initLangSelect = () => {
  document.querySelectorAll('.language-list li').forEach((item) => {
    item.addEventListener('click', function () {
      const lang = this.getAttribute('data-lang');
      const currentPath = window.location.pathname;

      const pathParts = currentPath.split('/');
      let newPath = '';

      if (window.languageList.includes(pathParts[1])) {
        pathParts[1] = lang;
        newPath = pathParts.join('/');
      } else {
        newPath = `/${lang}${currentPath}`;
      }

      window.location.href = newPath;
    });
  });
};

//===============================================================
redirectToUserLanguage();
initLangSelect();
initMobuleMenu();
initConnectors();
