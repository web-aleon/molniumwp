var gulp = require('gulp'),
	concatCSS = require('gulp-concat-css'),
	minifyCSS = require('gulp-minify-css'),
	rename = require('gulp-rename'),
	less = require('gulp-less'),
	autoprefixer = require('gulp-autoprefixer');

gulp.task('less', function() {
	gulp.src('less/*.less')
		.pipe(less())
		.pipe(concatCSS('style.css'))
		.pipe(autoprefixer('last 5 version'))
		.pipe(gulp.dest('css'));
});

gulp.task('watch', function() {
	gulp.watch('less/*.less', ['less'])
});