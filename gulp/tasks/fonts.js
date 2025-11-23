import gulp from 'gulp';
import fonter from 'gulp-fonter';
import ttf2woff from 'gulp-ttf2woff';
import ttf2woff2 from 'gulp-ttf2woff2';
import merge from 'merge-stream';

export const fonts = () => {
  const convert = gulp
    .src(app.path.src.fonts)
    .pipe(fonter({ formats: ['ttf'] }))
    .pipe(gulp.dest(app.path.build.fonts))
    .pipe(ttf2woff())
    .pipe(gulp.dest(app.path.build.fonts));

  const woff2 = gulp.src(app.path.src.fonts).pipe(ttf2woff2()).pipe(gulp.dest(app.path.build.fonts));

  const copyReady = gulp.src(app.path.src.fontsw).pipe(gulp.dest(app.path.build.fonts));

  return merge(convert, woff2, copyReady);
};
