import * as nodePath from "path";

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = "./dist";
const assetsFolder = "./dist/assets";
const srcFolder = "./src";

export const path = {
	build: {
		js: `${assetsFolder}/js/`,
		css: `${assetsFolder}/css/`,
		img: `${assetsFolder}/img/`,
		html: `${buildFolder}/`,
	},
	src: {
		js: `${srcFolder}/js/*.js`,
		img: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
		css: `${srcFolder}/css/tailwind.css`,
	},
	watch: {
		pages: `${buildFolder}/*.php`,
		components: `${buildFolder}/components/**/*.php`,
		css: `${srcFolder}/css/tailwind.css`,
		// js: `${srcFolder}/js/**/*.js `,
		// img: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
	},
	clean: assetsFolder,
	buildFolder: buildFolder,
	assetsFolder: assetsFolder,
	srcFolder: srcFolder,
	rootFolder: rootFolder,
};
