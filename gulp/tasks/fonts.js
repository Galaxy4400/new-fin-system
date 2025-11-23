import ttf2woff from 'gulp-ttf2woff';
import ttf2woff2 from 'gulp-ttf2woff2';
import newer from 'gulp-newer';
import merge from 'merge-stream';

export const fonts = () => {
  const woff = app.gulp
    .src(app.path.src.fonts, {
      encoding: false,
      removeBOM: false,
      allowEmpty: true,
    })
    .pipe(
      newer({
        dest: app.path.build.fonts,
        ext: '.woff',
      }),
    )
    .pipe(ttf2woff())
    .pipe(app.gulp.dest(app.path.build.fonts));

  const woff2 = app.gulp
    .src(app.path.src.fonts, {
      encoding: false,
      removeBOM: false,
      allowEmpty: true,
    })
    .pipe(
      newer({
        dest: app.path.build.fonts,
        ext: '.woff2',
      }),
    )
    .pipe(ttf2woff2())
    .pipe(app.gulp.dest(app.path.build.fonts));

  return merge(woff, woff2);
};
