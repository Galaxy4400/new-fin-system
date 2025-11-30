class Geo {
  data = null;

  async init() {
    const storageKey = 'user_country';
    const cached = JSON.parse(localStorage.getItem(storageKey) || 'null');
    const today = new Date().toISOString().slice(0, 10); // YYYY-MM-DD

    if (cached && cached.date === today) {
      this.data = cached.data;
      return;
    }

    try {
      const res = await fetch('https://ipapi.co/json/');
      const json = await res.json();

      this.data = json;

      localStorage.setItem(
        storageKey,
        JSON.stringify({
          data: json,
          date: today,
        }),
      );
    } catch (e) {
      console.warn('Failed to load geo:', e);
    }
  }
}

window.geo = new Geo();
