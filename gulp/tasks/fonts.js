import gulp from 'gulp';
import ttf2woff from 'gulp-ttf2woff';
import ttf2woff2 from 'gulp-ttf2woff2';
import merge from 'merge-stream';

export const fonts = () => {
  // TTF → WOFF
  const ttfToWoff = gulp
    .src(app.path.src.fonts) // *.ttf
    .pipe(ttf2woff())
    .pipe(gulp.dest(app.path.build.fonts));

  // TTF → WOFF2
  const ttfToWoff2 = gulp
    .src(app.path.src.fonts) // *.ttf
    .pipe(ttf2woff2())
    .pipe(gulp.dest(app.path.build.fonts));

  // Копируем готовые WOFF/WOFF2
  const copyReady = gulp
    .src(app.path.src.fontsw) // *.{woff,woff2}
    .pipe(gulp.dest(app.path.build.fonts));

  return merge(ttfToWoff, ttfToWoff2, copyReady);
};
