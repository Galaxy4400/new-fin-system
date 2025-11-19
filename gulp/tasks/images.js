import sharp from 'sharp';
import fg from 'fast-glob';
import path from 'path';
import fs from 'fs/promises';
import imagemin from 'gulp-imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminSvgo from 'imagemin-svgo';

export async function images() {
  const srcDir = `${app.path.srcFolder}/img`;
  const distDir = app.path.build.img;

  // ---------- 1. Генерация AVIF + WebP ----------
  const rasterFiles = await fg(['*.png', '*.jpg', '*.jpeg'], {
    cwd: srcDir,
    absolute: false,
  });

  for (const file of rasterFiles) {
    const ext = path.extname(file);
    const base = path.basename(file, ext);

    // ABS путь к файлу
    const inputFile = path.join(srcDir, file);

    await fs.mkdir(distDir, { recursive: true });

    // AVIF
    await sharp(inputFile)
      .avif({
        quality: 50,
        chromaSubsampling: '4:4:4',
        speed: 0,
      })
      .toFile(path.join(distDir, `${base}.avif`));

    // WebP
    await sharp(inputFile)
      .webp({
        quality: 75,
        alphaQuality: 75,
        method: 6,
      })
      .toFile(path.join(distDir, `${base}.webp`));
  }

  // ---------- 2. JPEG/PNG оптимизация ----------
  await new Promise((resolve) =>
    app.gulp
      .src(`${srcDir}/*.{jpg,jpeg,png}`)
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
      .pipe(app.gulp.dest(distDir))
      .on('end', resolve),
  );

  // ---------- 3. Простое копирование SVG, ICO и других ----------
  return app.gulp
    .src([
      `${srcDir}/**/*.*`,
      `!${srcDir}/*.{jpg,jpeg,png}`, // исключить растровые
    ])
    .pipe(app.gulp.dest(distDir));
}
