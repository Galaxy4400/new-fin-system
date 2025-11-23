const numFormat = (num) => {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
};

class Currency {
  currentRate;
  localCurrency;
  localCurrencySymbol;
  countryToCurrency = {
    AU: 'AUD', // Australia
    BG: 'BGN', // Bulgaria
    BR: 'BRL', // Brazil
    CA: 'CAD', // Canada
    CH: 'CHF', // Switzerland
    CN: 'CNY', // China
    CZ: 'CZK', // Czech Republic
    DK: 'DKK', // Denmark
    DE: 'EUR', // Germany
    FR: 'EUR', // France
    IT: 'EUR', // Italy
    ES: 'EUR', // Spain
    IE: 'EUR', // Ireland
    AT: 'EUR', // Austria
    BE: 'EUR', // Belgium
    PT: 'EUR', // Portugal
    NL: 'EUR', // Netherlands
    GR: 'EUR', // Greece
    FI: 'EUR', // Finland
    EE: 'EUR', // Estonia
    LV: 'EUR', // Latvia
    LT: 'EUR', // Lithuania
    SK: 'EUR', // Slovakia
    SI: 'EUR', // Slovenia
    CY: 'EUR', // Cyprus
    LU: 'EUR', // Luxembourg
    MT: 'EUR', // Malta
    GB: 'GBP', // United Kingdom
    HK: 'HKD', // Hong Kong
    HR: 'HRK', // Croatia
    HU: 'HUF', // Hungary
    ID: 'IDR', // Indonesia
    IL: 'ILS', // Israel
    IN: 'INR', // India
    IS: 'ISK', // Iceland
    JP: 'JPY', // Japan
    KR: 'KRW', // South Korea
    MX: 'MXN', // Mexico
    MY: 'MYR', // Malaysia
    NO: 'NOK', // Norway
    NZ: 'NZD', // New Zealand
    PH: 'PHP', // Philippines
    PL: 'PLN', // Poland
    RO: 'RON', // Romania
    SE: 'SEK', // Sweden
    SG: 'SGD', // Singapore
    TH: 'THB', // Thailand
    TR: 'TRY', // Turkey
    US: 'USD', // United States
    ZA: 'ZAR', // South Africa
  };

  currencyToSymbol = {
    AUD: 'A$',
    BGN: 'лв',
    BRL: 'R$',
    CAD: 'CA$',
    CHF: 'CHF',
    CNY: '¥',
    CZK: 'Kč',
    DKK: 'kr',
    EUR: '€',
    GBP: '£',
    HKD: 'HK$',
    HRK: 'kn',
    HUF: 'Ft',
    IDR: 'Rp',
    ILS: '₪',
    INR: '₹',
    ISK: 'kr',
    JPY: '¥',
    KRW: '₩',
    MXN: 'MX$',
    MYR: 'RM',
    NOK: 'kr',
    NZD: 'NZ$',
    PHP: '₱',
    PLN: 'zł',
    RON: 'lei',
    SEK: 'kr',
    SGD: 'S$',
    THB: '฿',
    TRY: '₺',
    USD: '$',
    ZAR: 'R',
  };

  async init() {
    this.localCurrency = await this.getLocalCurrency();
    this.localCurrencySymbol = this.getCurrencySymbol();
    this.currentRate = await this.getCurrentRate();
  }

  getCurrencySymbol() {
    return this.currencyToSymbol[this.localCurrency] || '$';
  }

  async getLocalCurrency() {
    const countryCode = window.geo?.data?.country_code || window.userCountry;

    const localCurrency = this.countryToCurrency[countryCode];

    return localCurrency || 'USD';
  }

  async getCurrentRate(from = 'USD') {
    try {
      if (from === this.localCurrency) return 1;

      const storageKey = `rate_${from}_${this.localCurrency}`;
      const cachedData = JSON.parse(localStorage.getItem(storageKey) || 'null');
      const today = new Date().toISOString().slice(0, 10); // YYYY-MM-DD

      if (cachedData && cachedData.date === today) {
        return cachedData.rate;
      }

      const response = await fetch(`https://api.frankfurter.app/latest?from=${from}&to=${this.localCurrency}`);
      const result = await response.json();

      const rate = result.rates[this.localCurrency];

      localStorage.setItem(
        storageKey,
        JSON.stringify({
          rate: rate,
          date: today,
        }),
      );

      return rate;
    } catch (err) {
      console.warn('FrankfurterIP not response:', err);

      return 1;
    }
  }

  convertToLocalCurrency(value) {
    const converted = value * this.currentRate;

    return Math.ceil(converted);
  }

  toLocalFormat(value, withCurrency = true, useSymbol = true) {
    return `${numFormat(value)}${
      withCurrency ? ' ' + (useSymbol ? this.localCurrencySymbol : this.localCurrency) : ''
    }`;
  }
}

window.currency = new Currency();

// const convertPriceInHTML = () => {
//   const currencyBlocks = document.querySelectorAll('[data-local-currency]');

//   for (const block of currencyBlocks) {
//     const value = block.dataset.localCurrency;
//     const converted = window.workWithCurrency.convertToLocalCurrency(value);
//     block.innerText = window.workWithCurrency.toLocalFormat(converted);
//   }
// };

// window.addEventListener('DOMContentLoaded', async () => {
//   await window.workWithCurrency.init();
//   convertPriceInHTML();
// });
