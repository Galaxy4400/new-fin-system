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
import { copy } from './gulp/tasks/copy.js';
import { reset } from './gulp/tasks/reset.js';
import { tailwind } from './gulp/tasks/tw.js';

// Наблюдатель за изменениями в файлах
function watcher() {
  gulp.watch(path.watch.pages, tailwind);
  gulp.watch(path.watch.css, tailwind);
  gulp.watch(path.watch.components, tailwind);
}

// Построение сценариев выполнения задач
const build = gulp.series(reset, copy, tailwind);
const dev = gulp.series(reset, tailwind, watcher);

// Экспорт сценариев для добавления в скрипт в package.json
export { dev };
export { build };

// Выполнение сценария по умолчанию
gulp.task('default', dev);
