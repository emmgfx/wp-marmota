var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var clean = require('gulp-clean');
var zip = require('gulp-zip');
var autoprefixer = require('gulp-autoprefixer');
var notify = require("gulp-notify");

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(
            sass({
                outputStyle: 'compressed'
            }).on('error', sass.logError)
        )
        .on('error', notify.onError(function (error) {
            return {
                message: error.messageOriginal,
                title: "Error on SASS"
            };
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./'))
        .pipe(notify({
            title: "SASS compiled",
        }));
});

gulp.task('default', function() {
    gulp.watch('sass/**/*.scss', ['styles']);
});

gulp.task('clean', function () {
    return gulp.src('build', {read: false})
        .pipe(clean());
});

gulp.task('build', ['clean'], function () {
    return gulp.src([
        '**/*',
        '!build/**/*',
        '!gulpfile.js',
        '!package-lock.json',
        '!package.json',
        '!sass/**/*',
        '!sass',
        '!node_modules/**/*',
        '!node_modules',
    ])
    .pipe(zip('mrmt.zip'))
    .pipe(gulp.dest('build'));
});
