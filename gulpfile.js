'use strict';

let gulp = require('gulp');
let sass = require('gulp-sass')(require('sass'));
let browserSync = require('browser-sync').create();
const { parallel } = require('gulp');
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');



function buildStyles() {
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({cascade:true}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/'))
    .pipe(browserSync.reload({stream: true}));
};
function buildJs(){
  return gulp.src([
    "./node_modules/slick-carousel/slick/slick.min.js",
    "./node_modules/animejs/lib/anime.min.js"
  ])
  .pipe(concat("libs.min.js"))
  .pipe(uglify())
  .pipe(gulp.dest("app/js"))
  .pipe(browserSync.reload({stream: true}));
};
function serverStart(){
  browserSync.init({
    server: {
        host: "192.168.31.101",
        baseDir: "app/"
    }
});
}
function browserReload(){
  browserSync.reload();
}
exports.buildStyles = buildStyles;
exports.buildJs = buildJs;
function watch() {
  gulp.watch('app/scss/**/*.scss', buildStyles);
  gulp.watch('app/*.html').on('change', browserReload);
  gulp.watch('app/js/*js').on('change', browserReload);
};
exports.default = parallel(serverStart, buildJs, watch);