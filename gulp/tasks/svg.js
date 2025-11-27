import svgmin from 'gulp-svgmin';

export const svg = () => {
  return app.gulp
    .src(app.path.src.svg, { allowEmpty: true })
    .pipe(
      svgmin({
        js2svg: { pretty: true },
        plugins: [{ removeViewBox: false }, { cleanupIDs: false }],
      }),
    )
    .pipe(app.gulp.dest(app.path.build.svg));
};
