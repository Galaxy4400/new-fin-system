async function swiperPlugins() {
	await Promise.all([import("/public/js/swiper.min.js")]);

	await import("/public/js/sliders.js");
}

document.addEventListener("DOMContentLoaded", () => {
	if ("requestIdleCallback" in window) {
		requestIdleCallback(swiperPlugins, { timeout: 3000 });
	} else {
		setTimeout(swiperPlugins, 2000);
	}
});
