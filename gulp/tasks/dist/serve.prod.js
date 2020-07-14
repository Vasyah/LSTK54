"use strict";var gulp=require("gulp"),imageMinify=require("./imageMinify"),svgSprite=require("./svgSprite"),styles=require("./styles"),pug2html=require("./pug2html"),script=require("./script"),copyDependencies=require("./copyDependencies"),server=require("browser-sync").create();function readyReload(e){server.reload(),e()}module.exports=function(e){return server.init({server:"assets",notify:!1,open:!0,cors:!0}),gulp.watch("src/images/**/*.{gif,png,jpg,jpeg,svg,webp}",gulp.series(imageMinify,readyReload)),gulp.watch("src/styles/**/*.scss",gulp.series(styles,function(e){return gulp.src("assets/css").pipe(server.stream()).on("end",e)})),gulp.watch("src/js/**/*.js",gulp.series(script,readyReload)),gulp.watch("package.json",gulp.series(copyDependencies,readyReload)),e()};