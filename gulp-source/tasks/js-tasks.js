import gulp from 'gulp';
import concat from 'gulp-concat';
import sourcemaps from 'gulp-sourcemaps';
import terser from 'gulp-terser';
import rename from 'gulp-rename';

export const ownScriptsTask = () =>
  gulp
    .src('web/assets/scripts/site/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(rename('main.min.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('web/assets/scripts'));

export const vendorScriptsTask = () =>
  gulp
    .src('web/assets/scripts/vendors/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('vendors.js'))
    .pipe(rename('vendors.min.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('web/assets/scripts'));

gulp.task('own-scripts', ownScriptsTask);
gulp.task('vendor-scripts', vendorScriptsTask);
gulp.task('vendors-scripts', vendorScriptsTask);

const javascriptTask = gulp.series('own-scripts', 'vendor-scripts');

export default javascriptTask;