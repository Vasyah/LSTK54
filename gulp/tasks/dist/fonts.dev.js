"use strict";

var gulp = require('gulp');

module.exports = function fonts() {
  return gulp.src('src/fonts/*').pipe(gulp.dest('assets/fonts'));
};