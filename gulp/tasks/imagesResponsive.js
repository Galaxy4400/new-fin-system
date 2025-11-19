import sharp from 'sharp';
import fg from 'fast-glob';
import path from 'path';
import fs from 'fs/promises';

export async function imagesResponsive() {
  const srcPath = `${app.path.srcFolder}/img/responsive`;
  const distPath = `${app.path.build.imgr}`;

  const sizes = [320, 640, 1280, 1920];

  const files = await fg(['**/*.png', '**/*.jpg', '**/*.jpeg'], {
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

      if (ext === '.png') {
        await input
          .clone()
          .avif({ quality: 50, speed: 0, chromaSubsampling: '4:4:4' })
          .toFile(path.join(outDir, `${base}-${width}.avif`));

        await input
          .clone()
          .webp({ quality: 75, alphaQuality: 75, method: 6 })
          .toFile(path.join(outDir, `${base}-${width}.webp`));
      }

      if (ext === '.jpg' || ext === '.jpeg') {
        await input
          .clone()
          .avif({ quality: 50, speed: 0, chromaSubsampling: '4:4:4' })
          .toFile(path.join(outDir, `${base}-${width}.avif`));

        await input
          .clone()
          .webp({ quality: 75, method: 6 })
          .toFile(path.join(outDir, `${base}-${width}.webp`));

        await input
          .clone()
          .jpeg({ quality: 82, progressive: true, chromaSubsampling: '4:4:4' })
          .toFile(path.join(outDir, `${base}-${width}.jpg`));
      }
    }
  }
}
