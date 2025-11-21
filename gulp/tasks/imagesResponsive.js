import sharp from 'sharp';
import fg from 'fast-glob';
import path from 'path';
import fs from 'fs/promises';

export async function imagesResponsive() {
  const srcPath = `${app.path.srcFolder}/img/responsive`;
  const distPath = `${app.path.build.imgr}`;

  const sizes = [320, 640, 1280];

  const files = await fg(['*.png', '*.jpg', '*.jpeg'], {
    cwd: srcPath,
    absolute: false,
  });

  for (const file of files) {
    const inputFile = path.join(srcPath, file);
    const ext = path.extname(file).toLowerCase();
    const base = path.basename(file, ext);
    const relDir = path.dirname(file);
    const outDir = path.join(distPath, relDir);

    await fs.mkdir(outDir, { recursive: true });

    for (const width of sizes) {
      const input = sharp(inputFile).resize({ width });

      // ---------- PNG ----------
      if (ext === '.png') {
        const outAvif = path.join(outDir, `${base}-${width}.avif`);
        if (!(await app.plugins.isNewer(inputFile, outAvif))) {
          await input
            .clone()
            .avif({
              quality: 50,
              effort: 9,
              chromaSubsampling: '4:4:4',
            })
            .toFile(outAvif);
        }

        const outWebp = path.join(outDir, `${base}-${width}.webp`);
        if (!(await app.plugins.isNewer(inputFile, outWebp))) {
          await input
            .clone()
            .webp({
              quality: 72,
              alphaQuality: 85,
              effort: 6,
            })
            .toFile(outWebp);
        }

        const outPng = path.join(outDir, `${base}-${width}.png`);
        if (!(await app.plugins.isNewer(inputFile, outPng))) {
          await input
            .clone()
            .png({
              compressionLevel: 9,
              adaptiveFiltering: true,
              palette: true,
            })
            .toFile(outPng);
        }
      }

      // ---------- JPG/JPEG ----------
      if (ext === '.jpg' || ext === '.jpeg') {
        const outAvif = path.join(outDir, `${base}-${width}.avif`);
        if (!(await app.plugins.isNewer(inputFile, outAvif))) {
          await input
            .clone()
            .avif({
              quality: 50,
              effort: 9,
              chromaSubsampling: '4:4:4',
            })
            .toFile(outAvif);
        }

        const outWebp = path.join(outDir, `${base}-${width}.webp`);
        if (!(await app.plugins.isNewer(inputFile, outWebp))) {
          await input
            .clone()
            .webp({
              quality: 72,
              effort: 6,
            })
            .toFile(outWebp);
        }

        const outJpg = path.join(outDir, `${base}-${width}.jpg`);
        if (!(await app.plugins.isNewer(inputFile, outJpg))) {
          await input
            .clone()
            .jpeg({
              quality: 78,
              progressive: true,
              chromaSubsampling: '4:4:4',
              mozjpeg: true,
            })
            .toFile(outJpg);
        }
      }
    }
  }
}
