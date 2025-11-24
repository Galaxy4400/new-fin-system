class Lang {
  __lang = {};

  init() {
    this.__lang = window.translations || {};
  }

  local(path) {
    if (!path) return path;

    return path.split('.').reduce((obj, key) => obj?.[key], this.__lang) ?? path;
  }
}

window.lang = new Lang();
