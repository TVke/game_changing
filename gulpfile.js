'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var imageOptim = require('gulp-imageoptim2');

gulp.task('default', ['sass','js','image','favicons']);
gulp.task('watch', ['sass:watch','js:watch']);

/*
 *
 * SASS
 *
 */
gulp.task('sass', function () {
	return gulp.src('resources/assets/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
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

gulp.task('js', function () {
	gulp.src('resources/assets/js/*.js')
		.pipe(uglify())
		.pipe(gulp.dest('public/js'));
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
	// .pipe(imageOptim.optimize())
		.pipe(gulp.dest('public/img'));
});
gulp.task('image:watch', function () {
	gulp.watch('resources/assets/img/**/*', ['image']);
});

/*
 *
 * audio
 *
 */

gulp.task('audio', function () {
	return gulp.src('resources/assets/audio/*.mp3')
		.pipe(gulp.dest('public/audio'));
});

// /*
//  *
//  * device-mockups
//  *
//  */
//
// gulp.task('device', function () {
// 	return gulp.src('resources/assets/device-mockups/**/*')
// 		.pipe(gulp.dest('public/device-mockups'));
// });
//
// /*
//  *
//  * plugins
//  *
//  */
//
// gulp.task('plugins', function () {
// 	return gulp.src('resources/assets/plugins/**/*')
// 		.pipe(gulp.dest('public/plugins'));
// });

/*
 *
 * favicons
 *
 */

gulp.task('favicons', function () {
	return gulp.src('resources/assets/favicons/*')
		.pipe(gulp.dest('public'));
});
