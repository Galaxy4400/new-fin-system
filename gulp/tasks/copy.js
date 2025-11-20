import merge from 'merge-stream';

export const copy = () => {
  const alpine = app.gulp.src(app.path.modules.alpine).pipe(app.gulp.dest(app.path.build.js));

  const intlTelMain = app.gulp.src(app.path.modules.intlTelMain).pipe(app.gulp.dest(app.path.build.js));

  const intlTelUtils = app.gulp.src(app.path.modules.intlTelUtils).pipe(app.gulp.dest(app.path.build.js));

  const intlTelCss = app.gulp.src(app.path.modules.intlTelCss).pipe(app.gulp.dest(app.path.build.css));

  return merge(alpine, intlTelMain, intlTelUtils, intlTelCss);
};
