import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
import rename from 'gulp-rename';
import cleanCSS from 'gulp-clean-css';
import gulpIf from 'gulp-if';
import autoprefixer from 'gulp-autoprefixer';
import groupCssMediaQueries from 'gulp-group-css-media-queries';
import sourcemaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass);

export const scss = () => {
  return app.gulp
    .src(app.path.src.scss)
    .pipe(app.plugins.plumber())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulpIf(app.isBuild, groupCssMediaQueries()))
    .pipe(
      gulpIf(
        app.isBuild,
        autoprefixer({
          grid: true,
          overrideBrowserslist: ['last 3 versions'],
          cascade: false,
        }),
      ),
    )
    .pipe(app.gulp.dest(app.path.build.css))
    .pipe(gulpIf(app.isBuild, cleanCSS()))
    .pipe(rename({ suffix: '.min' }))
    .pipe(app.gulp.dest(app.path.build.css, { sourcemaps: '.' }));
};
