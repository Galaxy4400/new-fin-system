class WorkWithLangs {
  __currentLangPrefix;
  __lang = {};

  constructor() {
    const urlPart = window.location.pathname.split('/')[1];
    this.__currentLangPrefix = urlPart && urlPart.length === 2 ? urlPart : window.defaultLang;
  }

  async init() {
    await this.setLang(this.__currentLangPrefix);
  }

  async setLang(langPrefix) {
    this.__currentLangPrefix = langPrefix;

    const cached = localStorage.getItem(langPrefix);

    if (cached) {
      try {
        this.__lang = JSON.parse(cached);
        return;
      } catch (e) {
        console.warn('Invalid JSON in localStorage. Fetching fresh...');
      }
    }

    try {
      const res = await fetch(`${window.location.origin}/lang/${langPrefix}.json`);
      const json = await res.json();
      localStorage.setItem(langPrefix, JSON.stringify(json));
      this.__lang = json;
    } catch (e) {
      console.warn(`Failed to fetch lang file: ${e.message}`);
      this.__lang = {};
    }
  }

  local(path) {
    if (!path || typeof path !== 'string') return path;

    const parts = path.split('.');
    let value = this.__lang;

    for (const part of parts) {
      if (value && typeof value === 'object' && part in value) {
        value = value[part];
      } else {
        return path;
      }
    }

    return typeof value === 'string' ? value : path;
  }
}

window.workWithLang = new WorkWithLangs();

await window.workWithLang.init();
