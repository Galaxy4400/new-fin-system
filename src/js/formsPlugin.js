async function loadFormPlugins() {
	await Promise.all([
		import("/public/js/intlTelInput.min.js"),
		import("/public/js/intlTelInput-utils.min.js"),
		import("/public/js/justvalidate.min.js"),
		import("/public/js/userCountry.js"),
	]);

	await import("/public/js/forms.js");
}

document.addEventListener("DOMContentLoaded", () => {
	if ("requestIdleCallback" in window) {
		requestIdleCallback(loadFormPlugins, { timeout: 3000 });
	} else {
		setTimeout(loadFormPlugins, 2000);
	}
});
