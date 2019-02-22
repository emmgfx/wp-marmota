var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');
var zip = require('gulp-zip');
var autoprefixer = require('gulp-autoprefixer');
var notify = require("gulp-notify");

gulp.task('styles', (done) => {
    return gulp.src('sass/**/*.scss')
        .pipe(
            sass({
                outputStyle: 'compressed'
            }).on('error', sass.logError)
        )
        .on('error', notify.onError((error) => {
            return {
                message: error.messageOriginal,
                title: error.relativePath
            };
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('default', () => {
    gulp.watch('sass/**/*.scss', gulp.parallel('styles'));
});

gulp.task('clean', (done) => {
    del(['build'], done());
});

gulp.task('pack', (done) => {
    return gulp.src([
        '**/*',
        '!build/**/*',
        '!gulpfile.js',
        '!package-lock.json',
        '!package.json',
        '!node_modules/**/*',
        '!node_modules',
    ])
    .pipe(zip('marmota.zip'))
    .pipe(gulp.dest('build'));
});

gulp.task('build', gulp.series('clean', 'styles', 'pack'));
