const numFormat = (num) => {
	return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
};

const pluralize = (n, f) =>
	f[n % 100 > 10 && n % 100 < 20 ? 2 : n % 10 == 1 ? 0 : n % 10 > 1 && n % 10 < 5 ? 1 : 2];

class WorkWithCurrency {
	currentRate;
	localCurrency;
	localCurrencySymbol;
	countryToCurrency = {
		AU: "AUD", // Australia
		BG: "BGN", // Bulgaria
		BR: "BRL", // Brazil
		CA: "CAD", // Canada
		CH: "CHF", // Switzerland
		CN: "CNY", // China
		CZ: "CZK", // Czech Republic
		DK: "DKK", // Denmark
		DE: "EUR", // Germany
		FR: "EUR", // France
		IT: "EUR", // Italy
		ES: "EUR", // Spain
		IE: "EUR", // Ireland
		AT: "EUR", // Austria
		BE: "EUR", // Belgium
		PT: "EUR", // Portugal
		NL: "EUR", // Netherlands
		GR: "EUR", // Greece
		FI: "EUR", // Finland
		EE: "EUR", // Estonia
		LV: "EUR", // Latvia
		LT: "EUR", // Lithuania
		SK: "EUR", // Slovakia
		SI: "EUR", // Slovenia
		CY: "EUR", // Cyprus
		LU: "EUR", // Luxembourg
		MT: "EUR", // Malta
		GB: "GBP", // United Kingdom
		HK: "HKD", // Hong Kong
		HR: "HRK", // Croatia
		HU: "HUF", // Hungary
		ID: "IDR", // Indonesia
		IL: "ILS", // Israel
		IN: "INR", // India
		IS: "ISK", // Iceland
		JP: "JPY", // Japan
		KR: "KRW", // South Korea
		MX: "MXN", // Mexico
		MY: "MYR", // Malaysia
		NO: "NOK", // Norway
		NZ: "NZD", // New Zealand
		PH: "PHP", // Philippines
		PL: "PLN", // Poland
		RO: "RON", // Romania
		SE: "SEK", // Sweden
		SG: "SGD", // Singapore
		TH: "THB", // Thailand
		TR: "TRY", // Turkey
		US: "USD", // United States
		ZA: "ZAR", // South Africa
	};

	currencyToSymbol = {
		AUD: "A$",
		BGN: "лв",
		BRL: "R$",
		CAD: "CA$",
		CHF: "CHF",
		CNY: "¥",
		CZK: "Kč",
		DKK: "kr",
		EUR: "€",
		GBP: "£",
		HKD: "HK$",
		HRK: "kn",
		HUF: "Ft",
		IDR: "Rp",
		ILS: "₪",
		INR: "₹",
		ISK: "kr",
		JPY: "¥",
		KRW: "₩",
		MXN: "MX$",
		MYR: "RM",
		NOK: "kr",
		NZD: "NZ$",
		PHP: "₱",
		PLN: "zł",
		RON: "lei",
		SEK: "kr",
		SGD: "S$",
		THB: "฿",
		TRY: "₺",
		USD: "$",
		ZAR: "R",
	};

	async init() {
		this.localCurrency = await this.getLocalCurrency();
		this.localCurrencySymbol = this.getCurrencySymbol();
		this.currentRate = await this.getCurrentRate();
	}

	async getCountryCode() {
		const cached = localStorage.getItem("country_code");

		if (cached) return cached;

		try {
			const res = await fetch("https://ipapi.co/json/");

			if (!res.ok) throw new Error("ipapi error");

			const data = await res.json();

			localStorage.setItem("country_code", data.country);

			return data.country;
		} catch (err) {
			console.warn("GeoIP not response:", err);
			return "US";
		}
	}

	getCurrencySymbol() {
		return this.currencyToSymbol[this.localCurrency] || "$";
	}

	async getLocalCurrency() {
		const countryCode = await this.getCountryCode();

		const localCurrency = this.countryToCurrency[countryCode];

		return localCurrency || "USD";
	}

	async getCurrentRate(from = "USD") {
		try {
			if (from === this.localCurrency) return 1;

			const response = await fetch(
				`https://api.frankfurter.app/latest?from=${from}&to=${this.localCurrency}`
			);
			const result = await response.json();

			const rate = result.rates[this.localCurrency];

			return rate;
		} catch (err) {
			console.warn("FrankfurterIP not response:", err);

			return 1;
		}
	}

	convertToLocalCurrency(value) {
		const converted = value * this.currentRate;

		return Math.ceil(converted);
	}

	toLocalFormat(value, withCurrency = true, useSymbol = true) {
		return `${numFormat(value)}${
			withCurrency ? " " + (useSymbol ? this.localCurrencySymbol : this.localCurrency) : ""
		}`;
	}
}

window.workWithCurrency = new WorkWithCurrency();

const rangeInit = () => {
	const value = document.getElementById("value");
	const symbol = document.getElementById("symbol");
	const days = document.getElementById("days");
	const range = document.getElementById("range");
	const ammount = document.getElementById("ammount");

	if (!value || !days || !range || !ammount || !symbol) return;

	value.value = window.workWithCurrency.convertToLocalCurrency(value.value, false);
	value.dataset.min = window.workWithCurrency.convertToLocalCurrency(value.dataset.min, false);
	value.dataset.max = window.workWithCurrency.convertToLocalCurrency(value.dataset.max, false);
	symbol.innerHTML = window.workWithCurrency.localCurrencySymbol;

	const rate = ammount.dataset.rate;

	const labelDay = days.dataset.day || null;
	const labelDays = days.dataset.days || null;
	const labelDaysMany = days.dataset.daysMany || null;

	const isPluralize = labelDay && labelDays && labelDaysMany;

	const getCurrentRangeValue = () => {
		let result = +value.value;

		result = Math.max(result, +value.dataset?.min || 1);
		result = Math.min(result, +value.dataset?.max || 1000000);

		return result;
	};

	const calculateCompoundInterest = (principal, days, rate = 0.05) => {
		return Math.ceil(principal * Math.pow(1 + rate, days));
	};

	const calcRangeValue = () => {
		const calculatedValue = calculateCompoundInterest(getCurrentRangeValue(), +range.value, +rate);

		ammount.innerText = window.workWithCurrency.toLocalFormat(calculatedValue);

		const count = +range.value;
		days.innerText = `${count}${
			isPluralize ? " " + pluralize(count, [labelDay, labelDays, labelDaysMany]) : ""
		}`;
	};

	range.addEventListener("input", calcRangeValue);
	value.addEventListener("change", calcRangeValue);

	value.addEventListener("change", () => {
		value.value = getCurrentRangeValue();
	});

	calcRangeValue();
};

const convertPriceInHTML = () => {
	const currencyBlocks = document.querySelectorAll("[data-local-currency]");

	for (const block of currencyBlocks) {
		const value = block.dataset.localCurrency;
		const converted = window.workWithCurrency.convertToLocalCurrency(value);
		block.innerHTML = window.workWithCurrency.toLocalFormat(converted);
	}
};

window.addEventListener("DOMContentLoaded", async () => {
	await window.workWithCurrency.init();
	rangeInit();
	convertPriceInHTML();
});
