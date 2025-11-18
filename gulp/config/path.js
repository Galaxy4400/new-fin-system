import * as nodePath from "path";

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = "./dist";
const srcFolder = "./src";

export const path = {
	build: {
		js: `${buildFolder}/assets/js/`,
		css: `${buildFolder}/assets/css/`,
		img: `${buildFolder}/assets/img/`,
		fonts: `${buildFolder}/assets/fonts/`,
	},
	src: {
		js: `${srcFolder}/js/*.js`,
		img: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp,avif,svg}`,
		css: `${srcFolder}/css/tailwind.css`,
	},
	watch: {
		js: `${srcFolder}/js/**/*.js `,
		css: `${srcFolder}/css/tailwind.css`,
		img: `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
	},
	clean: buildFolder,
	buildFolder: buildFolder,
	srcFolder: srcFolder,
	rootFolder: rootFolder,
};
