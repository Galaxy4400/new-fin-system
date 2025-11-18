window.userCountry = COUNTRY;

async function fetchUserCountry() {
	const cacheUserCountry = localStorage.getItem("user_country");

	if (cacheUserCountry) {
		window.userCountry = cacheUserCountry;

		return;
	}

	try {
		const res = await fetch("https://ipinfo.io/json");
		const payload = await res.json();

		const userCountry = payload && typeof payload.country === "string" ? payload.country : COUNTRY;

		localStorage.setItem("user_country", userCountry);

		window.userCountry = userCountry;
	} catch (error) {
		console.error("Failed to get user country:", error);

		window.userCountry = COUNTRY;
	}
}

fetchUserCountry();
