# Live reload files

Do you want to automatically update you page and styles in brwoser when they changed? This documentation for you!

Note! In insctructions belows i meant that all commands executed from your STARTER theme root folder!


## LiveReload

LiveReload is simply to install and configure, it's works just fine.

### Installation

Install [Chrome Extension](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?hl=ru) first.

Then install library.

~~~bash
npm install --save-dev gulp-livereload
~~~

### Edit gulpfile.js

Below fully modified file.

~~~js
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var livereload = require('gulp-livereload'); // new

var paths = {
  scss: 'styles/scss/**',
  css: 'styles/scss/styles.scss'
};

gulp.task('sass', function () {
  return gulp.src(paths.css)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./styles/css/'))
    .pipe(livereload({ start: true })); // new
});

gulp.task('watch', function () {
  livereload.listen(); //new
  gulp.watch(paths.scss, ['sass']);
});

gulp.task('default', ['watch', 'sass']);
~~~~

### Tips and tricks

* If you have some problem with styles revert back to previous state after successful update, then open Chrome dev tools, and tick `Disable cache` on the network tab.

## Browsersync

The much complex and better solution. It can reload not only styles and the page, it can also sync page scrolling within multiple devices.

### Installation

~~~bash
npm install browser-sync --save-dev
~~~

### Edit gulpfile.js

~~~js
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

var paths = {
  scss: 'styles/scss/**',
  css: 'styles/scss/styles.scss'
};

gulp.task('serve', ['sass'], function() {
  browserSync.init({
    proxy: "http://DOMAIN.dev", // Don't forget to change.
    noOpen: false
  });

  gulp.watch(paths.scss, ['sass']);
});

gulp.task('sass', function () {
  return gulp.src(paths.css)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./styles/css/'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function () {
  gulp.watch(paths.scss, ['sass']);
});

gulp.task('default', ['serve']);
~~~