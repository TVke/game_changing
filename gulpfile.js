'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const pump = require('pump');
var uglify = require('gulp-uglify');
var imageOptim = require('gulp-imageoptim2');

gulp.task('default', ['sass','js','image','font']);
gulp.task('watch', ['sass:watch','image:watch','js:watch','font:watch']);

/*
 *
 * SASS
 *
 */
gulp.task('sass', function () {
	return gulp.src('resources/assets/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('public/css'));
});
gulp.task('sass:watch', function () {
	gulp.watch('resources/assets/scss/*.scss', ['sass']);
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