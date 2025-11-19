import webp from 'gulp-webp';
import avif from 'gulp-avif';
import imagemin from 'gulp-imagemin';

export function images() {
  return app.gulp
    .src(`${app.path.srcFolder}/img/*.{jpg,jpeg,png}`, { encoding: false })
    .pipe(app.plugins.newer({ dest: app.path.build.img, ext: '.avif' }))
    .pipe(avif({ quality: 50 }))
    .pipe(app.gulp.dest(app.path.build.img))

    .pipe(app.gulp.src(app.path.src.img, { encoding: false }))
    .pipe(app.plugins.newer({ dest: app.path.build.img, ext: '.webp' }))
    .pipe(webp({ quality: 50 }))
    .pipe(app.gulp.dest(app.path.build.img))

    .pipe(app.gulp.src(app.path.src.img, { encoding: false }))
    .pipe(app.plugins.newer(app.path.build.img))
    .pipe(imagemin())
    .pipe(app.gulp.dest(app.path.build.img));
}
