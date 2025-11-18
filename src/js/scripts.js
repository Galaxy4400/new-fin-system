// new Spoiler("faq-spoiler", {
// 	single: true,
// });

const initLanguage = () => {
	const userLang = (navigator.language || navigator.userLanguage).split("-")[0];

	const initLang = getCookie("init_lang");

	if (initLang || userLang === window.DEFAULT_LANG || !LANGUAGE_LIST.includes(userLang)) return;

	setCookie("init_lang", userLang);

	window.location.replace(`${window.location.origin}/${userLang}`);
};

initLanguage();
