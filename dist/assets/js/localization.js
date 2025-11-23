class Lang {
  __lang = {};

  async init() {
    this.__lang = window.currentLangJson || {};
  }

  local(path) {
    if (!path) return path;

    return path.split('.').reduce((obj, key) => obj?.[key], this.__lang) ?? path;
  }
}

window.lang = new Lang();

await window.lang.init();
