import * as nodePath from "path";

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = "./dist/assets";
const srcFolder = "./src";

export const path = {
	build: {
		js: `${buildFolder}/js/`,
		css: `${buildFolder}/css/`,
		img: `${buildFolder}/img/`,
	},
	src: {
		js: `${srcFolder}/js/*.js`,
		img: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
		css: `${srcFolder}/css/tailwind.css`,
	},
	watch: {
		js: `${srcFolder}/js/**/*.js `,
		css: `${srcFolder}/css/tailwind.css`,
		img: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
	},
	clean: buildFolder,
	buildFolder: buildFolder,
	srcFolder: srcFolder,
	rootFolder: rootFolder,
};
