"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var gulp = require('gulp');

var plumber = require('gulp-plumber');

var pug = require('gulp-pug');

var pugLinter = require('gulp-pug-linter');

var htmlValidator = require('gulp-w3c-html-validator');

var bemValidator = require('gulp-html-bem-validator');

var config = require('../config');

var pugbem = require('gulp-pugbem');

pugbem.b = true;

module.exports = function pug2html() {
  var _pug;

  return gulp.src('src/pages/*.pug').pipe(plumber()).pipe(pugLinter({
    reporter: 'default'
  })).pipe(pug((_pug = {
    pretty: true
  }, _defineProperty(_pug, "pretty", config.pug2html.beautifyHtml), _defineProperty(_pug, "plugins", [pugbem]), _pug))).pipe(htmlValidator()) // .pipe(bemValidator())
  .pipe(gulp.dest('assets'));
};