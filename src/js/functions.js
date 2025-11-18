//===============================================================
if (window.matchMedia("(pointer: coarse)").matches) {
	document.querySelector("html").classList.add("_touch");
}

//===============================================================
window.addEventListener("load", () => {
	document.querySelector("body").classList.add("_loaded");
	if (document.querySelector(".wrapper")) {
		setTimeout(() => {
			document.querySelector(".wrapper").classList.add("_loaded");
		}, 0);
	}
});

//===============================================================
document.querySelectorAll(".menu-icon").forEach((menuIcon) => {
	menuIcon.innerHTML = "<span></span>".repeat(3);
});

//===============================================================
window.addEventListener("load", function () {
	if (!location.hash) return;

	const hash = location.hash.replace("#", "");

	if (document.querySelector(`[data-modal="${hash}"]`)) {
		modal.openModal(hash);
	}

	if (document.querySelector(`.${hash}`)) {
		scrollTo(hash);
	}
});

//===============================================================
document.querySelectorAll("[data-link]").forEach((link) => {
	const linkSelector = `[data-link="${link.dataset.link}"]`;
	const linkedElementSelector = `.${link.dataset.link}`;

	const isMenu = link.dataset.link === "menu__body" ? true : false;
	const body = document.querySelector("body");

	document.addEventListener("mousedown", (event) => {
		const target = event.target;

		if (target.closest(linkSelector)) {
			link.classList.toggle("_active");
			isMenu && body.classList.toggle("_lock");
			document.querySelector(linkedElementSelector).classList.toggle("_active");
		} else if (
			!target.closest(linkedElementSelector) &&
			document.querySelector(`${linkedElementSelector}._active`)
		) {
			if (target.dataset.choice !== undefined) return;
			link.classList.remove("_active");
			document.querySelector(linkedElementSelector).classList.remove("_active");
			isMenu && body.classList.remove("_lock");
		}
	});
});

//===============================================================
function scrollTo(target, offset = 0, focus = false) {
	let scrollTarget;

	try {
		scrollTarget = typeof target == "object" ? target : document.querySelector(`.${target}`);
	} catch (error) {
		return;
	}

	const elementPosition = scrollTarget.getBoundingClientRect().top;

	const isLocked = document.body.classList.contains("_lock") ? true : false;

	const getFocusTarget = (elem) => {
		const targetTag = elem.tagName.toLowerCase();

		if (targetTag == "input" || targetTag == "textarea") return elem;

		return elem.querySelector("input, textarea");
	};

	const focusTarget = getFocusTarget(scrollTarget);
	if (focus && focusTarget) {
		if (isElementInViewport(focusTarget)) {
			focusTarget.focus();
			return;
		} else {
			setTimeout(
				() => {
					focusTarget.focus();
				},
				isLocked ? 0 : 500
			);
		}
	}

	if (isLocked) return;

	const fixedBlock = document.querySelector("._fixed");
	if (fixedBlock) {
		offset =
			offset +
			fixedBlock.getBoundingClientRect().height +
			parseInt(getComputedStyle(fixedBlock).marginBottom);
	}

	const offsetPosition = elementPosition - offset;

	window.scrollBy({
		top: offsetPosition,
		behavior: "smooth",
	});
}

//===============================================================
function isElementInViewport(element, strict = true, offset = 0) {
	const elementRectangle = element.getBoundingClientRect();

	if (offset) offset += 1;

	if (strict) {
		return (
			elementRectangle.top >= 0 &&
			elementRectangle.left >= 0 &&
			elementRectangle.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			elementRectangle.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	} else {
		return (
			elementRectangle.top <= (window.innerHeight || document.documentElement.clientHeight) &&
			elementRectangle.left <= (window.innerWidth || document.documentElement.clientWidth) &&
			elementRectangle.bottom >= offset &&
			elementRectangle.right >= 0
		);
	}
}
