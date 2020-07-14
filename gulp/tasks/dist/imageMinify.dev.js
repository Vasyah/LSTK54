"use strict";

var gulp = require('gulp');

var imagemin = require('gulp-imagemin');

module.exports = function imageMinify() {
  return gulp.src('src/images/**/**/*.{.pdf,gif,png,jpg,svg,webp,jpeg}').pipe(imagemin([imagemin.gifsicle({
    interlaced: true
  }), imagemin.mozjpeg({
    quality: 75,
    progressive: true
  }), imagemin.optipng({
    optimizationLevel: 5
  }), imagemin.svgo({
    plugins: [{
      removeViewBox: true
    }, {
      cleanupIDs: false
    }]
  })])).pipe(gulp.dest('assets/images'));
};