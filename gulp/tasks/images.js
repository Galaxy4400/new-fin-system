import sharp from 'sharp';
import fg from 'fast-glob';
import path from 'path';
import fs from 'fs/promises';
import imagemin from 'gulp-imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminSvgo from 'imagemin-svgo';
import { isNewer } from '../utils/is-newer';

export async function images() {
  const srcDir = `${app.path.srcFolder}/img`;
  const distDir = app.path.build.img;

  await fs.mkdir(distDir, { recursive: true });

  // ---------- 1. AVIF/WebP ----------
  const rasterFiles = await fg(['*.png', '*.jpg', '*.jpeg'], {
    cwd: srcDir,
    absolute: false,
  });

  for (const file of rasterFiles) {
    const ext = path.extname(file);
    const base = path.basename(file, ext);

    const inputFile = path.join(srcDir, file);

    // --- AVIF ---
    const avifFile = path.join(distDir, `${base}.avif`);
    if (!(await isNewer(inputFile, avifFile))) {
      await sharp(inputFile)
        .avif({
          quality: 45,
          effort: 9,
          chromaSubsampling: '4:4:4',
        })
        .toFile(avifFile);
    }

    // --- WebP ---
    const webpFile = path.join(distDir, `${base}.webp`);
    if (!(await isNewer(inputFile, webpFile))) {
      await sharp(inputFile)
        .webp({
          quality: 72,
          alphaQuality: 85,
          effort: 6,
        })
        .toFile(webpFile);
    }
  }

  // ---------- 2. JPEG/PNG оптимизация ----------
  // Используем newer для imagemin — через .on('data') проверяем
  await new Promise((resolve) => {
    app.gulp
      .src(`${srcDir}/*.{jpg,jpeg,png}`)
      .pipe(
        imagemin([
          imageminMozjpeg({
            quality: 78,
            progressive: true,
            chromaSubsampling: '4:4:4',
            mozjpeg: true,
          }),
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
      .on('end', resolve);
  });

  // ---------- 3. SVG, ICO, GIF, WEBP (исходные) — копирование с NEWER ----------
  return app.gulp
    .src([
      `${srcDir}/**/*.*`,
      `!${srcDir}/*.{jpg,jpeg,png}`, // растровые исключаем
    ])
    .pipe(app.plugins.newer(distDir))
    .pipe(app.gulp.dest(distDir));
}
