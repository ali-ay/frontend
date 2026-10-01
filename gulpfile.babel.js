import gulp from 'gulp';

import cssTask from './gulp-source/tasks/css-tasks';
import javascriptTask from './gulp-source/tasks/js-tasks';
import { watchTask, createServerTask } from './gulp-source/tasks/browser-tasks';

// Task Tanımları
gulp.task('css', cssTask);
gulp.task('js', javascriptTask);
gulp.task('create-server', createServerTask);
gulp.task('watch', watchTask);

// Gulp 5 standart akışı: CSS ve JS derle -> Sunucuyu aç -> İzlemeye başla
gulp.task('run', gulp.series('css', 'js', 'create-server', 'watch'));
gulp.task('default', gulp.series('run-all'));