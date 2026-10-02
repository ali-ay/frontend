import gulp from 'gulp';
import browserSync from 'browser-sync';
import shell from 'gulp-shell';

import { CONFIG_PATH } from '../utils/getConfig.js';

const phpVersion = '8.3.30';
const bs = browserSync.create();

export const createServerTask = (done) => {
  bs.init(
    {
      proxy: 'localhost:8000',
      startPath: '/',
    },
    done
  );
};

export const browserSyncReloadTask = (done) => {
  bs.reload();
  done();
};

export const watchTask = () => {
  gulp.watch('public/assets/images/sprite/**/*', gulp.series('css', 'bs-reload'));
  gulp.watch('public/assets/stylus/**/*.styl', gulp.series('css'));
  gulp.watch('public/assets/styles/vendors/**/*.css', gulp.series('css'));
  gulp.watch('public/assets/scripts/**/*.js', gulp.series('own-scripts', 'bs-reload'));
  gulp.watch('public/assets/scripts/vendors/others/**/*.js', gulp.series('vendors-scripts', 'bs-reload'));
  
  // app/config altındaki YAML değişikliklerini dinle:
  gulp.watch('app/config/**/*', gulp.series('css', 'bs-reload'));
  
  gulp.watch('public/**/*.html').on('change', () => bs.reload());
  gulp.watch('src/WebBundle/Resources/views/**/*.twig').on('change', () => bs.reload());
};

gulp.task('bs-reload', browserSyncReloadTask);
gulp.task('create-server', createServerTask);

gulp.task(
  'run-all',
  shell.task([
    `cd ../ms-iyzico && /Applications/MAMP/bin/php/php${phpVersion}/bin/php -S localhost:8082 router.php &`,
    `cd ../bo-iyzico && /Applications/MAMP/bin/php/php${phpVersion}/bin/php -S localhost:8081 &`,
    `/Applications/MAMP/bin/php/php${phpVersion}/bin/php -S localhost:8000 -t public public/index.php &`,
    'npm run gulp:watch',
  ])
);

gulp.task('kill-all', shell.task(['killall php']));