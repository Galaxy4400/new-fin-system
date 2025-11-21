import gulp from 'gulp';
import babel from 'gulp-babel';
import terser from 'gulp-terser';
import rename from 'gulp-rename';

export const scripts = () => {
  return gulp
    .src(app.path.src.js) // путь к js-файлам
    .pipe(
      babel({
        presets: ['@babel/preset-env'],
      }),
    )
    .pipe(terser()) // минификация + аглификация
    .pipe(rename({ suffix: '.min' })) // script.js → script.min.js
    .pipe(gulp.dest(app.path.build.js));
};
