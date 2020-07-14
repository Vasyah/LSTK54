"use strict";

var gulp = require('gulp');

var imageMinify = require('./imageMinify');

var svgSprite = require('./svgSprite');

var styles = require('./styles');

var pug2html = require('./pug2html');

var script = require('./script');

var copyDependencies = require('./copyDependencies');

var server = require('browser-sync').create();

function readyReload(cb) {
  server.reload();
  cb();
}

module.exports = function serve(cb) {
  server.init({
    server: 'assets',
    notify: false,
    open: true,
    cors: true
  });
  gulp.watch('src/images/**/*.{gif,png,jpg,jpeg,svg,webp}', gulp.series(imageMinify, readyReload)); // gulp.watch('src/img/sprite/*.svg', gulp.series(svgSprite, readyReload))

  gulp.watch('src/styles/**/*.scss', gulp.series(styles, function (cb) {
    return gulp.src('assets/css').pipe(server.stream()).on('end', cb);
  }));
  gulp.watch('src/js/**/*.js', gulp.series(script, readyReload)); // gulp.watch('src/pages/**/*.pug', gulp.series(pug2html, readyReload))

  gulp.watch('package.json', gulp.series(copyDependencies, readyReload));
  return cb();
};