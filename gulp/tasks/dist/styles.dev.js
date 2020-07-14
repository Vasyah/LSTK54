"use strict";

var gulp = require('gulp');

var plumber = require('gulp-plumber');

var sass = require('gulp-sass');

var cleanCSS = require('gulp-clean-css');

var sourcemaps = require('gulp-sourcemaps');

var shorthand = require('gulp-shorthand');

var autoprefixer = require('gulp-autoprefixer');

var gulpStylelint = require('gulp-stylelint');

var rename = require("gulp-rename");

module.exports = function styles() {
  return gulp.src('src/styles/*.scss').pipe(plumber()).pipe(gulpStylelint({
    failAfterError: false,
    reporters: [{
      formatter: 'string',
      console: true
    }]
  })).pipe(sourcemaps.init()).pipe(sass()).pipe(autoprefixer({
    cascade: false
  })).pipe(shorthand()).pipe(cleanCSS({
    debug: true,
    compatibility: '*'
  }, function (details) {
    console.log("".concat(details.name, ": Original size:").concat(details.stats.originalSize, " - Minified size: ").concat(details.stats.minifiedSize));
  })).pipe(sourcemaps.write()) // .pipe(rename({ suffix: '.min' }))
  .pipe(gulp.dest('assets/..'));
};