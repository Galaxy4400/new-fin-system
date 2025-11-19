import responsive from 'gulp-sharp-responsive';
import debug from 'gulp-debug';

export function imagesResponsive() {
  return app.gulp
    .src(app.path.src.imgr)
    .pipe(debug({ title: 'SRC:' }))
    .pipe(
      responsive(
        {
          // Правила для PNG
          '**/*.png': {
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
              },
            ],
          },

          // Правила для JPEG
          '**/*.{jpg,jpeg}': {
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
              },
              {
                format: 'jpeg',
                quality: 82,
                progressive: true,
                chromaSubsampling: '4:4:4',
              },
            ],
          },
        },

        // Общие настройки rename
        {
          rename: (path, size, format) => {
            path.basename += `-${size.width}`;
            path.extname = `.${format.extension}`;
            return path;
          },
        },
      ),
    )
    .pipe(app.gulp.dest(app.path.build.imgr));
}

// import newer from 'gulp-newer';
// import rename from 'gulp-rename';
// import responsive from 'gulp-sharp-responsive';

// export function imagesResponsive() {
//   const sizes = [320, 640, 1280, 1920];
//   const formats = ['avif', 'webp', 'jpeg'];

//   return app.gulp
//     .src(app.path.src.imgr)

//     // --- кастомный rename для newer ---
//     .pipe(
//       rename((path) => {
//         path.basename += '-check'; // временное имя
//         path.extname = '.tmp';     // временное расширение
//       }),
//     )

//     // --- сравниваем только по оригинальному файлу ---
//     .pipe(
//       newer({
//         dest: app.path.build.imgr,
//         map: (relative) => {
//           // hero-check.tmp → hero*
//           const base = relative.replace(/-check\.tmp$/, '');

//           // newer ищет, существует ли хотя бы ОДНА версия
//           return [
//             `${base}-320.avif`,
//             `${base}-640.avif`,
//             `${base}-1280.avif`,
//             `${base}-1920.avif`,
//           ][0]; // проверяем по одному нужному формату
//         },
//       }),
//     )

//     // --- возвращаем оригинальные имена перед responsive ---
//     .pipe(
//       rename((path) => {
//         path.basename = path.basename.replace('-check', '');
//         path.extname = ''; // вернём правильное позже
//       }),
//     )

//     // --- responsive ---
//     .pipe(
//       responsive({
//         sizes,
//         formats: [
//           {
//             format: 'avif',
//             quality: 50,
//             speed: 0,
//             chromaSubsampling: '4:4:4',
//           },
//           {
//             format: 'webp',
//             quality: 75,
//             alphaQuality: 75,
//             method: 6,
//           },
//           {
//             format: 'jpeg',
//             quality: 82,
//             progressive: true,
//             chromaSubsampling: '4:4:4',
//           },
//         ],
//         rename: (path, size, format) => {
//           path.basename += `-${size.width}`;
//           path.extname = `.${format.extension}`;
//           return path;
//         },
//       }),
//     )

//     .pipe(app.gulp.dest(app.path.build.imgr));
// }
