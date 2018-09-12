/* file: gulpfile.js */

var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify-css');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
// var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify-es').default;

var config = {
  nodeDir: './node_modules'
}
// Sass files to watch
var cssFiles = [
  './sass/**/*.scss'
];

// JS to watch
var jsFiles = './js/src/*.js';

var jsDest = 'js/dist';

gulp.task('sass', function () {
  return gulp.src('./sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      precision: 8,
      noCache: true,
      includePaths: [
        config.nodeDir + '/bootstrap/scss',
      ]
    }).on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('.'))
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('.'))
    .pipe(notify({ message: 'Wait for it....wait for it!!!' }));
});

gulp.task('compress', function () {
  return gulp.src(jsFiles)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(jsDest))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(jsDest));
});

gulp.task('watch', function () {
  gulp.watch(cssFiles, ['sass']);
  gulp.watch(jsFiles, ['compress']);
});

gulp.task('default', ['sass', 'watch', 'compress']);
