import gulp from 'gulp';
import { path } from './gulp/config/path.js';
import { plugins } from './gulp/config/plugins.js';

// global process
global.app = {
  isBuild: process.argv.includes('--build'),
  isDev: !process.argv.includes('--build'),
  path: path,
  gulp: gulp,
  plugins: plugins,
};

// Импорт задач
import { reset } from './gulp/tasks/reset.js';
import { scss } from './gulp/tasks/scss.js';
import { fonts } from './gulp/tasks/fonts.js';
import { fontscss } from './gulp/tasks/fontscss.js';
import { images } from './gulp/tasks/images.js';
import { imagesResponsive } from './gulp/tasks/imagesResponsive.js';
import { svg } from './gulp/tasks/svg.js';

// Наблюдатель за изменениями в файлах
function watcher() {
  gulp.watch(path.watch.pages, scss);
  gulp.watch(path.watch.scss, scss);
  gulp.watch(path.watch.components, scss);
}

// Построение сценариев выполнения задач
const build = gulp.series(reset, fonts, fontscss, scss, svg, images, imagesResponsive);
const dev = gulp.series(reset, scss, watcher);

// Экспорт сценариев для добавления в скрипт в package.json
export { dev };
export { build };

// Выполнение сценария по умолчанию
gulp.task('default', dev);
