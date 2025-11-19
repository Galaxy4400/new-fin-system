import imagemin from 'gulp-imagemin';
import webp from 'gulp-webp';
import avif from 'gulp-avif';

export const images = () => {
  return (
    app.gulp
      .src(app.path.src.img)
      .pipe(
        app.plugins.plumber(
          app.plugins.notify.onError({
            title: 'IMAGES',
            message: 'Error: <%= error.message %>',
          }),
        ),
      )

      // Пропускаем только новые файлы
      .pipe(app.plugins.newer(app.path.build.img))

      // Создание WebP (только в билде)
      .pipe(app.plugins.if(app.isBuild, webp({ quality: 80 })))
      .pipe(app.plugins.if(app.isBuild, app.gulp.dest(app.path.build.img)))

      // Повторно читаем обычные изображения
      .pipe(app.gulp.src(app.path.src.img))

      // Пропускаем только новые файлы
      .pipe(app.plugins.newer(app.path.build.img))

      // Создание AVIF (только в билде)
      .pipe(app.plugins.if(app.isBuild, avif({ quality: 50 })))
      .pipe(app.plugins.if(app.isBuild, app.gulp.dest(app.path.build.img)))

      // Повторное чтение исходников
      .pipe(app.gulp.src(app.path.src.img))
      .pipe(app.plugins.newer(app.path.build.img))

      // Оптимизация изображений
      .pipe(
        app.plugins.if(
          app.isBuild,
          imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true,
            optimizationLevel: 5,
          }),
        ),
      )

      .pipe(app.gulp.dest(app.path.build.img))
  );
};
