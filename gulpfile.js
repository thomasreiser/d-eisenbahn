const { src, dest, parallel } = require('gulp');
const minifyCSS = require('gulp-csso');
const minifyJS = require('gulp-uglify');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const es = require('event-stream');

function css() {
  return src(['node_modules/bootstrap/dist/css/bootstrap.css',
              'node_modules/owl.carousel/dist/assets/owl.carousel.css',
              'node_modules/owl.carousel/dist/assets/owl.theme.default.css',
              'node_modules/@fortawesome/fontawesome-free/css/fontawesome.css',
              'node_modules/@fortawesome/fontawesome-free/css/brands.css',
              'node_modules/@fortawesome/fontawesome-free/css/solid.css',
              'node_modules/@fortawesome/fontawesome-free/css/regular.css',
              'css/jquery.bootstrap.year.calendar-1.0.0.min.css',
              'css/zoigl.css'])
    .pipe(autoprefixer())
    .pipe(minifyCSS())
    .pipe(concat('d-eisenbahn.min.css'))
    .pipe(dest('css'))
}

function webfonts() {
  return src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
    .pipe(dest('webfonts'))
}

function js() {
  var full = src(['node_modules/es5-shim/es5-shim.js',
                  'node_modules/classlist-polyfill/src/index.js',
                  'node_modules/picturefill/dist/picturefill.js',
                  'node_modules/jquery/dist/jquery.slim.js',
                  'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
                  'node_modules/owl.carousel/dist/owl.carousel.js',
                  'js/jquery.bootstrap.year.calendar-1.0.0-zoigl.min.js',
                  'js/termine.js',
                  'js/zoigl.js'])
    .pipe(minifyJS())
    .pipe(concat('d-eisenbahn.min.js'))
    .pipe(dest('js'));

  var ie9 =  src(['node_modules/es5-shim/es5-shim.js',
                  'node_modules/classlist-polyfill/src/index.js',
                  'node_modules/picturefill/dist/picturefill.js',
                  'node_modules/jquery/dist/jquery.slim.js',
                  'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
                  'js/jquery.bootstrap.year.calendar-1.0.0-zoigl.min.js',
                  'js/termine.js',
                  'js/zoigl.js'])
    .pipe(minifyJS())
    .pipe(concat('d-eisenbahn-ie9.min.js'))
    .pipe(dest('js'));

    return es.concat(full, ie9);
}

exports.css = css;
exports.webfonts = webfonts;
exports.js = js;
exports.default = parallel(css, webfonts, js);