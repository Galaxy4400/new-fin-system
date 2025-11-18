document.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".language-list li").forEach((item) => {
		item.addEventListener("click", function () {
			const lang = this.getAttribute("data-lang");
			const currentPath = window.location.pathname;

			const pathParts = currentPath.split("/");
			let newPath = "";

			if (LANGUAGE_LIST.includes(pathParts[1])) {
				pathParts[1] = lang;
				newPath = pathParts.join("/");
			} else {
				newPath = `/${lang}${currentPath}`;
			}

			window.location.href = newPath;
		});
	});
});
