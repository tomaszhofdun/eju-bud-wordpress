var gulp = require('gulp'),
settings = require('./settings'),
modernizr = require("gulp-modernizr"),
postcss = require("gulp-postcss"),
autoprefixer = require("autoprefixer"),
sourcemaps = require("gulp-sourcemaps"),
simpleVars = require("postcss-simple-vars"),
nested = require("postcss-nested"),
importCss = require("postcss-import"),
mixin = require("postcss-mixins"),
postcssColorMod = require("postcss-color-mod-function"),
webpack = require("webpack"),
rename = require("gulp-rename"),
svg = require("gulp-svg-sprite"),
browserSync = require("browser-sync").create(),
del = require("del"),
svg2png = require("gulp-svg2png");

const { series, parallel } = require('gulp');




  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////
    //   modernizr
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////

  // Add classes like "flexbox" to html tag
  
  gulp.task("setClasses2",function setClasses2(){
    return gulp
      .src([settings.themeLocation + "styles/**/*.css",settings.themeLocation + "scripts/**/*.js"])
      .pipe(
        modernizr({
          options: ["setClasses"]
        })
      )
      .pipe(gulp.dest(settings.themeLocation + "modernizr"));
  })

  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////
    //   scripts
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////

  gulp.task("scripts", function(callback) {
     return webpack(require("./webpack.config.js"), function(err, stats) {
      if (err) {
        console.log(err.toString());
      }
      else {
        console.log(stats.toString());
      }
      callback();
    });
  })
  
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////
    //   styles
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////

  gulp.task("css", function css(done) {
    return gulp
      .src(settings.themeLocation + "styles/styles.css")
      .pipe(sourcemaps.init())
      .pipe(
        postcss([importCss(), mixin(), simpleVars(), autoprefixer(), nested(),postcssColorMod()])
      )
      .on("error", function(errorInfo) {
        console.log(errorInfo.toString());
        this.emit("end");
      })
      .pipe(sourcemaps.write())
      .pipe(rename("style.css"))
      .pipe(gulp.dest(settings.themeLocation));
      done();
  })

  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////
    //sprite
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////

  //   plik konfiguracyjny sprite ze scieżką do templatki
config = {
    shape: {
      spacing: {
        padding: 1
      }
    },
    mode: {
      css: {
        variables: {
          replaceSvgWithPng: function() {
            return function(sprite, render) {
              return render(sprite)
                .split(".svg")
                .join(".png");
            };
          }
        },
        sprite: "sprite.svg",
        render: {
          css: {
            template: "gulp/templates/sprite.css"
          }
        }
      }
    }
  };
  gulp.task("deleteOldSpriteCss",function deleteOldSpriteCss() {
    return del([settings.themeLocation + "temp/sprite", settings.themeLocation + "images/icons/svg-compiled"]);
  });
  
  
  // sprite tworzy css-a z backgroundem i pozycją ikon oraz tworzy plik .svg ze wszystkimi ikonami
  gulp.task("createSprite",function createSprite() {
    return gulp
      .src(settings.themeLocation + "images/icons/**/*.svg")
      .pipe(svg(config))
      .pipe(gulp.dest(settings.themeLocation + "temp/sprite"));
  });

  // kopiujemy wygenerowany plik css z pozycją każej ikony tam gdzie mamy wszystkie style
  gulp.task("copySpriteCss",function copySpriteCss() {
    return gulp
      .src(settings.themeLocation + "temp/sprite/css/*.css")
      .pipe(rename("_sprite.css"))
      .pipe(gulp.dest(settings.themeLocation + "styles/modules"));
  });
  
  
  gulp.task("createPng",function createPng() {
    return gulp
      .src(settings.themeLocation + "temp/sprite/css/*.svg")
      .pipe(svg2png())
      .pipe(gulp.dest(settings.themeLocation + "temp/sprite/css"));
  });
  
  
  
  // kopiujemy utworzony zbiorczy svg i png do folderu app/assets/images
  gulp.task("copySpriteSvg",function copySpriteSvg() {
    return gulp
      .src(settings.themeLocation + "temp/sprite/css/**/*.{svg,png}")
      .pipe(gulp.dest(settings.themeLocation + "images/icons/svg-compiled"));
  });
  
  // usuwamy folder sprite w katalogu sprite
  gulp.task("endCleaning",function endCleaning() {
    return del(settings.themeLocation + "temp/sprite");
  });
  
  
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////
    //   monitor
  ////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////

  gulp.task("monitor", function(callback) {
    browserSync.init({
      notify: false,
      proxy: settings.urlToPreview,
      ghostMode: false
    });
  
    gulp.watch("./**/*.php", function (done) {
      browserSync.reload();
      done();
    })
    gulp.watch(settings.themeLocation + "styles/**/*.css", gulp.series("css","cssInject"))
    gulp.watch(settings.themeLocation + "scripts/**/*.js", gulp.series("setClasses2", "scripts", "refreshSite" ))
    callback();
  } ) 
  
  gulp.task("cssInject", function cssInject() {
    return gulp.src(settings.themeLocation + "style.css")
    .pipe(browserSync.stream());
  })
  
  gulp.task("refreshSite", function refreshSite(done) {
    browserSync.reload();
    done();
  })
  
  

  gulp.task("scripts_with_modernizr", gulp.series("setClasses2", "scripts"))
  
  gulp.task("icons", gulp.series("deleteOldSpriteCss", "createSprite",  "copySpriteCss", "createPng", "copySpriteSvg", "endCleaning"))

 