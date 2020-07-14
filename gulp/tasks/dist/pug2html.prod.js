"use strict";function _defineProperty(e,r,p){return r in e?Object.defineProperty(e,r,{value:p,enumerable:!0,configurable:!0,writable:!0}):e[r]=p,e}var gulp=require("gulp"),plumber=require("gulp-plumber"),pug=require("gulp-pug"),pugLinter=require("gulp-pug-linter"),htmlValidator=require("gulp-w3c-html-validator"),bemValidator=require("gulp-html-bem-validator"),config=require("../config"),pugbem=require("gulp-pugbem");pugbem.b=!0,module.exports=function(){var e;return gulp.src("src/pages/*.pug").pipe(plumber()).pipe(pugLinter({reporter:"default"})).pipe(pug((_defineProperty(e={pretty:!0},"pretty",config.pug2html.beautifyHtml),_defineProperty(e,"plugins",[pugbem]),e))).pipe(htmlValidator()).pipe(gulp.dest("assets"))};