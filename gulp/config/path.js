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
    imgf: `${assetsFolder}/img/formats/`,
    imgr: `${assetsFolder}/img/responsive/`,
    svg: `${assetsFolder}/img/svg/`,
    fonts: `${assetsFolder}/fonts/`,
    html: `${buildFolder}/`,
  },
  src: {
    js: `${assetsFolder}/js/*.js`,
    img: `${srcFolder}/img/*.*`,
    imgf: `${srcFolder}/img/formats/*.{jpg,jpeg,png}`,
    imgr: `${srcFolder}/img/responsive/*.{jpg,jpeg,png}`,
    svg: `${srcFolder}/img/svg/*.svg`,
    scss: `${srcFolder}/scss/styles.scss`,
    fonts: `${srcFolder}/fonts/*.ttf`,
    fontsw: `${srcFolder}/fonts/*.{woff,woff2}`,
  },
  modules: {
    alpine: `${modulesFolder}/alpinejs/dist/cdn.min.js`,
    intlTelMain: `${modulesFolder}/intl-tel-input/build/js/intlTelInput.min.js`,
    intlTelUtils: `${modulesFolder}/intl-tel-input/build/js/utils.js`,
    intlTelCss: `${modulesFolder}/intl-tel-input/build/css/intlTelInput.css`,
  },
  watch: {
    pages: `${buildFolder}/pages/**/*.php`,
    components: `${buildFolder}/components/**/*.php`,
    css: `${srcFolder}/css/*.css`,
    scss: `${srcFolder}/scss/*.scss`,
  },
  clean: assetsFolder,
  cleanCss: `${assetsFolder}/css`,
  buildFolder: buildFolder,
  assetsFolder: assetsFolder,
  srcFolder: srcFolder,
  rootFolder: rootFolder,
};
