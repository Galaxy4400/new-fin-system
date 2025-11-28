import fs from 'fs';
import path from 'path';

export const fontscss = (done) => {
  const fontsDir = app.path.build.fonts; // dist/assets/fonts/
  const cssFile = `${app.path.srcFolder}/scss/fonts.scss`; // генерируем сюда

  // Собираем список файлов
  const fontFiles = fs.readdirSync(fontsDir);

  // Оставляем только woff & woff2
  const onlyFonts = fontFiles.filter((f) => f.endsWith('.woff') || f.endsWith('.woff2'));

  let css = '';

  // Уникальные имена шрифтов без расширений
  const fontNames = [...new Set(onlyFonts.map((f) => path.basename(f, path.extname(f))))];

  fontNames.forEach((fontName) => {
    const fontFamily = fontName
      .replace(/-Thin|-ExtraLight|-Light|-Regular|-Medium|-SemiBold|-Bold|-ExtraBold|-Black/i, '')
      .replace(/-/g, ' ');

    let weight = 400;
    let style = 'normal';

    if (/Thin/i.test(fontName)) weight = 100;
    else if (/ExtraLight/i.test(fontName)) weight = 200;
    else if (/Light/i.test(fontName)) weight = 300;
    else if (/Regular/i.test(fontName)) weight = 400;
    else if (/Medium/i.test(fontName)) weight = 500;
    else if (/SemiBold/i.test(fontName)) weight = 600;
    else if (/ExtraBold/i.test(fontName)) weight = 800;
    else if (/Bold/i.test(fontName)) weight = 700;
    else if (/Black/i.test(fontName)) weight = 900;

    if (/Italic/i.test(fontName)) style = 'italic';

    css += `
@font-face {
  font-family: '${fontFamily}';
  src: url('../fonts/${fontName}.woff2') format('woff2');
  font-weight: ${weight};
  font-style: ${style};
  font-display: swap;
}
`;
  });

  // Пишем файл
  fs.writeFileSync(cssFile, css);

  done();
};
