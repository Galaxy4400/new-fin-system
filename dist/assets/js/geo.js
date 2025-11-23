class Geo {
  data = null;

  async init() {
    const cached = localStorage.getItem('user_country');

    if (cached) {
      this.data = JSON.parse(cached);
      return;
    }

    try {
      const res = await fetch('https://ipapi.co/json/');
      const json = await res.json();
      this.data = json;

      localStorage.setItem('user_country', JSON.stringify(json));
    } catch (e) {
      console.warn('Failed to load geo:', e);
    }
  }
}

window.geo = new Geo();
