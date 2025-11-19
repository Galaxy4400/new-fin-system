import responsive from 'gulp-sharp-responsive';

export function imagesResponsive() {
  return app.gulp
    .src(app.path.src.imgr)
    .pipe(
      responsive({
        sizes: [320, 640, 1280, 1920],
        formats: [
          {
            format: 'avif',
            quality: 50,
            speed: 0,
            chromaSubsampling: '4:4:4',
          },
          {
            format: 'webp',
            quality: 75,
            alphaQuality: 75,
            method: 6,
            lossless: false,
          },
          {
            format: 'jpeg',
            quality: 82,
            progressive: true,
            chromaSubsampling: '4:4:4',
          },
        ],
        rename: (path, size, format) => {
          path.basename += `-${size.width}`;
          path.extname = `.${format.extension}`;
          return path;
        },
      }),
    )
    .pipe(app.gulp.dest(app.path.build.imgr));
}
