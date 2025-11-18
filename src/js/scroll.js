function initLazyLoad() {
	const lazyloadImages = document.querySelectorAll("img[data-src]");

	if (!lazyloadImages.length) return;

	new LazyLoad(lazyloadImages);
}
document.addEventListener("DOMContentLoaded", () => initLazyLoad());

//===============================================================
window.addEventListener("scroll", actionsOnScroll);
document.addEventListener("DOMContentLoaded", () => actionsOnScroll());

//===============================================================
function actionsOnScroll() {
	moveUpBtnState();
	headerState();
}

//===============================================================
function moveUpBtnState() {
	const currentScroll = window.pageYOffset;

	const moveUpBtn = document.querySelector("[data-move-up]");

	if (!moveUpBtn) return;

	if (currentScroll > document.documentElement.clientHeight - 1) {
		moveUpBtn.classList.add("_scroll");
	} else {
		moveUpBtn.classList.remove("_scroll");
	}
}

//===============================================================
function headerState() {
	const currentScroll = window.pageYOffset;

	const header = document.querySelector("header");

	if (!header) return;

	if (currentScroll > 0) {
		header.classList.add("_scroll");
	} else {
		header.classList.remove("_scroll");
	}
}

//===============================================================
document.querySelectorAll("[data-goto]").forEach((link) => {
	link.addEventListener("click", (e) => {
		e.preventDefault();
		let offset = 0;

		if (link.dataset.offset) {
			offset += +link.dataset.offset;
		}

		scrollTo(link.dataset.goto, offset);
	});
});
