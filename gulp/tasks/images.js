import webp from 'gulp-webp';
import avif from 'gulp-avif';
import imagemin from 'gulp-imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminSvgo from 'imagemin-svgo';

export function images() {
  return app.gulp
    .src(`${app.path.srcFolder}/img/*.{jpg,jpeg,png}`, { encoding: false })
    .pipe(app.plugins.newer({ dest: app.path.build.img, ext: '.avif' }))
    .pipe(avif({ quality: 50, speed: 0, chromaSubsampling: '4:4:4' }))
    .pipe(app.gulp.dest(app.path.build.img))

    .pipe(app.gulp.src(app.path.src.img, { encoding: false }))
    .pipe(app.plugins.newer({ dest: app.path.build.img, ext: '.webp' }))
    .pipe(webp({ quality: 75, alphaQuality: 75, method: 6 }))
    .pipe(app.gulp.dest(app.path.build.img))

    .pipe(app.gulp.src(app.path.src.img, { encoding: false }))
    .pipe(app.plugins.newer(app.path.build.img))
    .pipe(
      imagemin([
        imageminMozjpeg({ quality: 75, progressive: true }),
        imageminPngquant({ quality: [0.6, 0.8], speed: 1 }),
        imageminSvgo({
          plugins: [
            { name: 'removeViewBox', active: false },
            { name: 'cleanupIDs', active: true },
          ],
        }),
      ]),
    )
    .pipe(app.gulp.dest(app.path.build.img));
}
