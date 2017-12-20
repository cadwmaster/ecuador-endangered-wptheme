'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
	return gulp.src('./theme/sass/**/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./theme'));
});

gulp.task('sass:watch', function () {
	gulp.watch('./theme/sass/**/*.scss', ['sass']);
});