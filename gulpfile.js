
var gulp       = require('gulp');
var gutil      = require('gulp-util');
var concat     = require('gulp-concat');
var notify     = require('gulp-notify');
var sass       = require('gulp-ruby-sass');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS  = require('gulp-minify-css');
var uglify     = require('gulp-uglify');
var exec       = require('child_process').exec;
var sys        = require('sys');

// Where do you store your Sass files?
var sassDir = 'assets/scss';
var jsDir = 'assets/js';

// Which directory should Sass compile to?
var targetCSSDir = 'dist/assets/css';
var targetJsDir = 'dist/assets/js';

// CSS: Default
gulp.task('css', function () {
    return gulp.src(sassDir + '/styles.scss')
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
});

// Js: default
gulp.task('js', function() {
    return gulp.src([jsDir + '/main.js'])
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest(targetJsDir))
});

// Generate site
gulp.task('gen', function() {
    exec('php bin/generate.php', function(error, stdout) {
        sys.puts(stdout);
    });
});

// Keep an eye on Sass and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['css']);
    gulp.watch('views/**/*.blade.php', ['gen']);
});