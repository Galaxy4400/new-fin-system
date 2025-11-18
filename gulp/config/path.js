import * as nodePath from 'path';

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = './dist';
const assetsFolder = './dist/assets';
const srcFolder = './src';
const modulesFolder = './node_modules';

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
  modules: {
    alpine: `${modulesFolder}/alpinejs/dist/cdn.min.js`,
  },
  watch: {
    pages: `${buildFolder}/*.php`,
    components: `${buildFolder}/components/**/*.php`,
    css: `${srcFolder}/css/tailwind.css`,
    // js: `${srcFolder}/js/**/*.js `,
    // img: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp,avif}`,
  },
  clean: assetsFolder,
  cleanCss: `${assetsFolder}/css`,
  buildFolder: buildFolder,
  assetsFolder: assetsFolder,
  srcFolder: srcFolder,
  rootFolder: rootFolder,
};
