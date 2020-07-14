"use strict";

var gulp = require('gulp');

var eslint = require('gulp-eslint');

var babel = require('gulp-babel');

var terser = require('gulp-terser');

var rename = require('gulp-rename');

var sourcemaps = require('gulp-sourcemaps');

module.exports = function script(cb) {
  gulp.src('src/js/main.js') // .pipe(plumber())
  // .pipe(eslint())
  // .pipe(eslint.format())
  // .pipe(webpack({
  //   mode: process.env.NODE_ENV,
  //   output: {
  //     filename: '[name].min.js',
  //   },
  //   module: {
  //     rules: [
  //       {
  //         test: /\.m?js$/,
  //         exclude: /(node_modules|bower_components)/,
  //         use: {
  //           loader: 'babel-loader',
  //           options: {
  //             presets: ['@babel/preset-env']
  //           }
  //         }
  //       }
  //     ]
  //   },
  //   plugins: [
  //     new CircularDependencyPlugin(),
  //     new DuplicatePackageCheckerPlugin()
  //   ]
  // }))
  // .pipe(gulp.dest('build/js'))
  .pipe(eslint()).pipe(eslint.format()).pipe(sourcemaps.init()).pipe(babel({
    presets: ['@babel/env']
  })).pipe(terser()).pipe(sourcemaps.write()).pipe(rename({
    suffix: '.min'
  })).pipe(gulp.dest('assets/js'));
  return cb();
};