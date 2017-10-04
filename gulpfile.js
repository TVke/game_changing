'use strict';
const gulp = require('gulp');
const scss = require('gulp-scss');
const autoprefixer = require('gulp-autoprefixer');
const pump = require('pump');
var uglify = require('gulp-uglify');
var imageOptim = require('gulp-imageoptim2');

gulp.task('default', ['scss','js','image','font']);
gulp.task('watch', ['scss:watch','image:watch','js:watch','font:watch']);

/*
 *
 * SASS
 *
 */
gulp.task('scss', function () {
	gulp.src('resources/assets/scss/*.scss')
		.pipe(scss({"bundleExec": true}))
		.pipe(autoprefixer())
		.pipe(gulp.dest('public/css'));
});
gulp.task('scss:watch', function () {
	gulp.watch('resources/assets/scss/*.scss', ['scss']);
});

/*
 *
 * js
 *
 */

gulp.task('js', function (cb) {
	pump([
		gulp.src('resources/assets/js/*.js'),
		uglify(),
		gulp.dest('public/js')
	],cb);
});
gulp.task('js:watch', function () {
	gulp.watch('resources/assets/js/*.js', ['js']);
});

/*
 *
 * image
 *
 */

gulp.task('image', function () {
	return gulp.src('resources/assets/img/**/*')
		.pipe(imageOptim.optimize())
		.pipe(gulp.dest('public/img'));
});
gulp.task('image:watch', function () {
	gulp.watch('resources/assets/img/**/*', ['image']);
});

/*
 *
 * fonts
 *
 */

gulp.task('font', function() {
	return gulp.src('resources/assets/font/*')
		.pipe(gulp.dest('public/font'));
});
gulp.task('font:watch', function () {
	gulp.watch('resources/assets/font/*', ['font']);
});
