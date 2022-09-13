'use strict';

let gulp = require('gulp');
let sass = require('gulp-sass')(require('sass'));
const { parallel } = require('gulp');
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

function buildStyles() {
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({cascade:true}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/css/'))
};
function buildLateStyles() {
  return gulp.src('assets/scss/late-styles/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({cascade:true}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/css/'))
};
function buildLibraryStyles() {
  return gulp.src([
    './node_modules/intl-tel-input/build/css/intlTelInput.min.css',
    './assets/css/normalize.css'
  ])
    .pipe(concat("libs.min.css"))
    .pipe(gulp.dest('assets/css/'))
};
function buildJs(){
  return gulp.src([
    "./node_modules/slick-carousel/slick/slick.min.js",
  ])
  .pipe(concat("libs.min.js"))
  .pipe(uglify())
  .pipe(gulp.dest("assets/js"))
};
exports.buildStyles = buildStyles;
exports.buildJs = buildJs;
exports.buildLibraryStyles = buildLibraryStyles;
function watch() {
  gulp.watch('assets/scss/**/*.scss', buildStyles);
  gulp.watch('assets/scss/late-styles/*.scss', buildLateStyles);
  gulp.watch('./*.php');
  gulp.watch('assets/js/*js');
};
exports.default = parallel(buildJs, buildStyles, watch, buildLibraryStyles);