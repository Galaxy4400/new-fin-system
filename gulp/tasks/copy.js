export const copy = () => {
  return app.gulp.src(app.path.modules.alpine).pipe(app.gulp.dest(app.path.build.js));
};
