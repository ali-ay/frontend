import gulp from 'gulp';
import cleanCSS from 'gulp-clean-css';
import clean from 'gulp-clean';
import rename from 'gulp-rename';
import stylus from 'gulp-stylus';
import nib from 'nib';
import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

import { DIRECTORIES } from '../config/index.js';
import getConfig from '../utils/getConfig.js';

const stylesFolder = `${DIRECTORIES.source}/${DIRECTORIES.styles}`;
const stylusFolder = `${DIRECTORIES.source}/${DIRECTORIES.styl}`;
const imagesFolder = `${DIRECTORIES.source}/${DIRECTORIES.img}`;

export const minifyCssTask = () =>
  gulp
    .src(`${stylesFolder}/main.css`, { allowEmpty: true })
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(stylesFolder));

export const stylusMainTask = () =>
  gulp
    .src(`${stylusFolder}/main.styl`)
    .pipe(
      stylus({
        'include css': true,
        compress: false,
        linenos: false,
        use: [nib()],
      })
    )
    .pipe(gulp.dest(stylesFolder));

export const createSpriteTask = async () => {
  const config = getConfig() || {};
  const version = config?.framework?.assets?.version || 'v4.0.306';
  const stylPath = `${stylusFolder}/sprite/common.styl`;
  const iconDir = `${imagesFolder}/sprite/common`;
  const outDir = imagesFolder;

  if (!fs.existsSync(stylPath) || !fs.existsSync(iconDir)) {
    return;
  }

  let content = fs.readFileSync(stylPath, 'utf8');

  // --- SONSUZ DÖNGÜYÜ ENGELLEYEN KONTROL ---
  // Sadece dosyadaki versiyon gerçekten farklıysa diske yaz:
  const updatedContent = content.replace(/sprite-common-v[0-9.]+/g, `sprite-common-${version}`);
  if (updatedContent !== content) {
    fs.writeFileSync(stylPath, updatedContent, 'utf8');
    content = updatedContent;
  }
  // ----------------------------------------

  // 2. Koordinatları oku ve sprite'ı oluştur
  const regex = /^\$([a-zA-Z0-9_-]+)\s*=\s*(\d+)px\s+(\d+)px\s+-\d+px\s+-\d+px\s+(\d+)px\s+(\d+)px\s+(\d+)px\s+(\d+)px/gm;
  const icons = [];
  let base1xW = null;
  let base1xH = null;
  let match;

  while ((match = regex.exec(content)) !== null) {
    const rawName = match[1];
    if (rawName.endsWith('_total_width') || rawName.endsWith('_total_height')) continue;

    const x = parseInt(match[2], 10);
    const y = parseInt(match[3], 10);
    const w = parseInt(match[4], 10);
    const h = parseInt(match[5], 10);
    const tw = parseInt(match[6], 10);
    const th = parseInt(match[7], 10);

    if (!base1xW) {
      base1xW = tw;
      base1xH = th;
    }

    let iconFile = null;
    const candidates = [
      `${rawName}.png`,
      `${rawName.replace(/_/g, '-')}.png`,
      `${rawName.replace(/-/g, '_')}.png`,
    ];

    for (const c of candidates) {
      if (fs.existsSync(path.join(iconDir, c))) {
        iconFile = c;
        break;
      }
    }

    if (iconFile) {
      icons.push({ file: iconFile, x, y, w, h });
    }
  }

  const total1xW = base1xW || 505;
  const total1xH = base1xH || 465;
  const total2xW = total1xW * 2;
  const total2xH = total1xH * 2;

  // 1x Sprite
  const normalLayers = icons.map((item) => ({
    input: path.join(iconDir, item.file),
    left: item.x,
    top: item.y,
  }));

  await sharp({
    create: {
      width: total1xW,
      height: total1xH,
      channels: 4,
      background: { r: 0, g: 0, b: 0, alpha: 0 },
    },
  })
    .composite(normalLayers)
    .png()
    .toFile(path.join(outDir, `sprite-common-${version}.png`));

  // 2x Sprite
  const retinaLayers = [];
  for (const item of icons) {
    const baseName = item.file.replace('.png', '');
    const retinaName = `${baseName}@2x.png`;
    const retinaPath = path.join(iconDir, retinaName);

    if (fs.existsSync(retinaPath)) {
      retinaLayers.push({
        input: retinaPath,
        left: item.x * 2,
        top: item.y * 2,
      });
    } else {
      const resizedBuf = await sharp(path.join(iconDir, item.file))
        .resize(item.w * 2, item.h * 2)
        .toBuffer();
      retinaLayers.push({
        input: resizedBuf,
        left: item.x * 2,
        top: item.y * 2,
      });
    }
  }

  await sharp({
    create: {
      width: total2xW,
      height: total2xH,
      channels: 4,
      background: { r: 0, g: 0, b: 0, alpha: 0 },
    },
  })
    .composite(retinaLayers)
    .png()
    .toFile(path.join(outDir, `sprite-common-${version}@2x.png`));
};

gulp.task('minify-css', minifyCssTask);
gulp.task('stylus-main', stylusMainTask);
gulp.task('create-sprite', createSpriteTask);

// create-sprite artık güvenle zincirde yer alabilir:
const cssTask = gulp.series(
  'create-sprite',
  'stylus-main',
  'minify-css'
);

export default cssTask;