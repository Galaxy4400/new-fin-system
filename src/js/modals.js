const isMobile = () => {
	return /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
		navigator.userAgent
	);
};

const showModal = (modalName) => {
	document.querySelectorAll("[data-modal]").forEach((modal) => modal.classList.remove("_active"));
	document.querySelector(`[data-modal='${modalName}']`)?.classList.add("_active");
};

// ybackPopup
const ybackPopup = () => {
	const pushState = () => {
		window.history.pushState({ cpa: 1 }, "", window.location);
	};

	const checkUserGesture = (callback) => {
		const gestureListener = () => {
			removeListeners();
			callback();
		};

		const removeListeners = () => {
			document.removeEventListener("mousemove", gestureListener);
			document.removeEventListener("scroll", gestureListener, { passive: true });
		};

		document.addEventListener("mousemove", gestureListener, { once: true });
		document.addEventListener("scroll", gestureListener, { once: true, passive: true });
	};

	checkUserGesture(() => {
		pushState();
	});

	window.onpopstate = () => {
		console.log("get");
		showModal("back-modal");
	};
};

// helloPopup
const helloPopup = () => {
	if (!getCookie("helloPopupShown")) {
		setTimeout(() => {
			setCookie("helloPopupShown", "1", { "max-age": 300 });
			showModal("hello-modal");
		}, 4000);
	}
};

// activityPopup
const activityPopup = () => {
	let timeoutId;

	const resetTimer = () => {
		clearTimeout(timeoutId);
		timeoutId = setTimeout(() => {
			showModal("activity-modal");
			resetTimer();
		}, 1000 * 60);
	};

	const events = ["mousemove", "keydown", "scroll", "touchstart"];

	events.forEach((event) => {
		window.addEventListener(event, resetTimer);
	});

	resetTimer();
};

// scrollPopup
const scrollPopup = () => {
	const rawPath = window.location.pathname;
	const path = rawPath === "/" ? "/" : rawPath.replace(/\/+$/, "");

	if (path !== "/" && !/^\/[a-z]{2}(-[a-z]{2})?$/i.test(path)) return;

	let hasShown = false;

	const open = () => {
		if (hasShown) return;

		hasShown = true;

		showModal("scroll-modal");
	};

	window.addEventListener("scroll", () => {
		if (hasShown) return;

		const scrollTop = window.scrollY || window.pageYOffset;
		const docHeight = document.documentElement.scrollHeight - window.innerHeight;
		const scrolledPercent = (scrollTop / docHeight) * 100;

		if (scrolledPercent >= 60) {
			open();
		}
	});
};

// exitPopup
const exitPopup = () => {
	let hasShown = false;
	let lastMouseMove = { time: 0, x: 0, y: 0 };
	let lastScroll = { time: 0, pos: 0 };
	let touchStartX = 0;
	let touchStartTime = 0;

	const startTouch = (e) => {
		if (!isMobile()) return;

		touchStartX = e.touches[0].clientX;
		touchStartTime = Date.now();
	};

	const calcSpeed = (e) => {
		const now = Date.now();

		const dt = now - lastMouseMove.time;
		const dx = Math.abs(e.clientX - lastMouseMove.x);
		const dy = Math.abs(e.clientY - lastMouseMove.y);

		lastMouseMove = { time: now, x: e.clientX, y: e.clientY };

		return Math.sqrt(dx * dx + dy * dy) / (dt || 1);
	};

	const needShowMouseover = (e) => {
		const nearLeft = e.clientX < 30;
		const nearRight = e.clientX > window.innerWidth - 30;
		const nearTop = e.clientY < 50;

		return nearLeft || nearRight || nearTop;
	};

	const needShowAfterSwipe = (e) => {
		if (!isMobile()) return;

		const touchEndX = e.changedTouches[0].clientX;
		const dt = Date.now() - touchStartTime;
		const dx = touchEndX - touchStartX;

		return dt < 300 && Math.abs(dx) > 100;
	};

	const needShowAfterScroll = () => {
		if (!isMobile()) return;

		const now = Date.now();
		const dt = now - lastScroll.time;
		const dy = lastScroll.pos - window.scrollY;

		lastScroll = { time: now, pos: window.scrollY };

		return dt < 200 && dy > 200 && window.scrollY < 30;
	};

	const open = (popupName) => {
		if (hasShown) return;
		hasShown = true;
		showModal(popupName);
		setTimeout(() => (hasShown = false), 1000 * 60);
	};

	document.addEventListener("mousemove", (e) => {
		if (calcSpeed(e) > 3.5 && needShowMouseover(e)) {
			open("exit-modal");
		}
	});

	document.addEventListener("touchstart", startTouch);

	document.addEventListener("touchend", (e) => {
		if (needShowAfterSwipe(e)) {
			open("back-modal");
		}
	});

	window.addEventListener("scroll", () => {
		if (needShowAfterScroll()) {
			open("back-modal");
		}
	});
};

// init
document.addEventListener("DOMContentLoaded", () => {
	const initialize = () => {
		ybackPopup();
		helloPopup();
		exitPopup();
		activityPopup();
		scrollPopup();
	};

	setTimeout(initialize, 1000);
});
