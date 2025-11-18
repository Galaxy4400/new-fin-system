import * as nodePath from "path";

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = "./dist";
const srcFolder = "./src";

export const path = {
	build: {
		js: `${buildFolder}/assets/js/`,
		css: `${buildFolder}/assets/css/`,
		html: `${buildFolder}/`,
		images: `${buildFolder}/assets/img/`,
		fonts: `${buildFolder}/assets/fonts/`,
		files: `${buildFolder}/assets/files/`,
		langs: `${buildFolder}/lang/langs/`,
	},
	src: {
		js: `${srcFolder}/assets/js/app.js`,
		images: `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,gif,webp,avif}`,
		svg: `${srcFolder}/assets/img/**/*.svg`,
		scss: `${srcFolder}/assets/scss/style.scss`,
		css: `${srcFolder}/assets/css/tailwind.css`,
		html: `${srcFolder}/**/*.{html,php}`,
		files: `${srcFolder}/assets/files/**/*.*`,
		langs: `${srcFolder}/lang/langs/*.json`,
		htaccess: `${srcFolder}/.htaccess`,
	},
	watch: {
		js: `${srcFolder}/assets/js/**/*.js `,
		scss: `${srcFolder}/assets/scss/**/*.scss`,
		css: `${srcFolder}/assets/css/tailwind.css`,
		html: `${srcFolder}/**/*.{html,php}`,
		images: `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
		files: `${srcFolder}/assets/files/**/*.*`,
		langs: `${srcFolder}/lang/langs/*.json`,
		htaccess: `${srcFolder}/.htaccess`,
	},
	clean: buildFolder,
	buildFolder: buildFolder,
	srcFolder: srcFolder,
	rootFolder: rootFolder,
};
