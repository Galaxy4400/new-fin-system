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
const initLangFlags = () => {
  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-flag-img]').forEach((img) => {
      img.src = img.dataset.src;
    });
  });
};

//===============================================================
const initLazyLoad = () => {
  new LazyLoad({
    elements_selector: '[data-lazy]',
  });
};

//===============================================================
const initInitials = () => {
  const initials = document.querySelectorAll('[data-initials]');
  const reviewers = document.querySelectorAll('[data-reviewer]');

  reviewers.forEach((reviewer, i) => {
    const name = reviewer.innerText.trim();
    const words = name.split(/\s+/).slice(0, 2);
    const letters = words.map((word) => word[0]?.toUpperCase() || '').join('');

    if (initials[i]) {
      initials[i].innerText = letters;
    }
  });
};

initInitials();

//===============================================================
const toggleAccordion = (index) => {
  const currentAccordion = document.getElementById(`accordion-${index}`);
  const currentContent = document.getElementById(`content-${index}`);
  const isActive = currentAccordion.hasAttribute('data-active');

  const allAccordions = document.querySelectorAll('[id^="accordion-"]');
  const allContents = document.querySelectorAll('[id^="content-"]');

  allAccordions.forEach((acc) => acc.removeAttribute('data-active'));
  allContents.forEach((content) => (content.style.maxHeight = '0'));

  if (isActive) return;

  currentAccordion.setAttribute('data-active', '');
  currentContent.style.maxHeight = currentContent.scrollHeight + 'px';
};

//===============================================================
initLazyLoad();
initLangFlags();
initMobuleMenu();
initConnectors();
