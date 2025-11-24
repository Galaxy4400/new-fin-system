import sharp from 'sharp';
import fg from 'fast-glob';
import path from 'path';
import fs from 'fs/promises';

export async function images() {
  const srcDir = `${app.path.srcFolder}/img/formats`;
  const distDir = app.path.build.imgf;

  await fs.mkdir(distDir, { recursive: true });

  // ---------- 1. PNG/JPG → оптимизированные PNG/JPG + AVIF + WebP ----------
  const rasterFiles = await fg(['*.png', '*.jpg', '*.jpeg'], {
    cwd: srcDir,
    absolute: false,
  });

  for (const file of rasterFiles) {
    const ext = path.extname(file).toLowerCase();
    const base = path.basename(file, ext);
    const relDir = path.dirname(file);
    const inputFile = path.join(srcDir, file);
    const outDir = path.join(distDir, relDir);

    await fs.mkdir(outDir, { recursive: true });

    // ---------- оптимизированный оригинал ----------
    if (ext === '.png') {
      const outPng = path.join(outDir, `${base}.png`);
      if (!(await app.plugins.isNewer(inputFile, outPng))) {
        await sharp(inputFile)
          .png({
            compressionLevel: 9,
            adaptiveFiltering: true,
            palette: true,
          })
          .toFile(outPng);
      }
    }

    if (ext === '.jpg' || ext === '.jpeg') {
      const outJpg = path.join(outDir, `${base}.jpg`);
      if (!(await app.plugins.isNewer(inputFile, outJpg))) {
        await sharp(inputFile)
          .jpeg({
            quality: 78,
            progressive: true,
            chromaSubsampling: '4:4:4',
            mozjpeg: true,
          })
          .toFile(outJpg);
      }
    }

    // ---------- AVIF ----------
    const avifFile = path.join(outDir, `${base}.avif`);
    if (!(await app.plugins.isNewer(inputFile, avifFile))) {
      await sharp(inputFile)
        .avif({
          quality: 50,
          effort: 9,
          chromaSubsampling: '4:4:4',
        })
        .toFile(avifFile);
    }

    // ---------- WebP ----------
    const webpFile = path.join(outDir, `${base}.webp`);
    if (!(await app.plugins.isNewer(inputFile, webpFile))) {
      await sharp(inputFile)
        .webp({
          quality: 72,
          alphaQuality: 85,
          effort: 6,
        })
        .toFile(webpFile);
    }
  }

  // ---------- 2. SVG/ICO/GIF/и т.п. — просто копируем с newer ----------
  return app.gulp
    .src(
      [
        `${srcDir}/*.*`,
        `!${srcDir}/**/*.{jpg,jpeg,png}`, // исключаем растровые, их уже сделали sharp
      ],
      { encoding: false },
    )
    .pipe(app.plugins.newer(distDir))
    .pipe(app.gulp.dest(distDir));
}
