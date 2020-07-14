"use strict";

var del = require('del');

module.exports = function clean(cb) {
  return del('assets').then(function () {
    cb();
  });
};