var gulp         = require('gulp'),

    autoprefixer = require('gulp-autoprefixer'),
    less         = require('gulp-less'),
    cssmin       = require('gulp-cssmin'),
    uglify       = require('gulp-uglify'),
    csscomb      = require('gulp-csscomb'),
    postcss      = require('gulp-postcss'),
    reporter     = require('postcss-reporter'),
    htmllint     = require('gulp-htmllint'),
    stylelint    = require('stylelint'),

    svgmin       = require('gulp-svgmin'),
    imagemin     = require('gulp-imagemin'),

    changeCase   = require('change-case'),
    browserSync  = require('browser-sync').create(),
    concat       = require('gulp-concat'),
    plumber      = require('gulp-plumber'),
    rename       = require('gulp-rename'),
    gutil        = require('gulp-util'),
    _if          = require('gulp-if'),
    sourcemaps   = require('gulp-sourcemaps'),
    args         = require('yargs'),

    jasmine     = require('gulp-jasmine');

//======================================================================================================================
// -- Переменные для настройки
//======================================================================================================================
// пути до файлов
var config         = '/dev/config',
    dev_css        = 'dev/less/',
    dev_js         = 'dev/js/',
    dev_img        = 'dev/img/',
    production_css = './css/',
    production_js  = './js/',
    production_img = './img/',
    html           = '../resources/views/front/';
// Параметры для галпа
var arguments    = args.argv;
var isProduction = (arguments.production === undefined) ? true : false;
// Расширения изображений
var image_ext = '{png,Png,PNG,jpg,Jpg,JPG,jpeg,Jpeg,JPEG,gif,Gif,GIF,bmp,BMP,Bmp}';
//======================================================================================================================

//======================================================================================================================
//Компиляция и обработка LESS
//======================================================================================================================
gulp.task('style', function () {
    gulp.src(dev_css + '*.less')
        .pipe(plumber())
        .pipe(_if(isProduction, sourcemaps.init()))// Если передан ключ --production то sourcemap не пишется.
        .pipe(less())
        .pipe(autoprefixer('last 20 version', 'safari 5', 'ie 8', 'ie9', 'opera 12.1', 'chrome', 'ff', 'ios'))
        .pipe(csscomb('./dev/config/.csscomb.json'))
        .pipe(_if(!isProduction, cssmin())) // Если передан ключ --production то css файл будет минимизирован и оптимизирован
        .pipe(_if(isProduction, sourcemaps.write() )) // Если передан ключ --production то sourcemap не пишется.
        .pipe(gulp.dest(production_css))
        .pipe(browserSync.stream())
});
//======================================================================================================================

gulp.task('script', function () {
    gulp.src(dev_js + '*.js')
        .pipe(plumber())
        .pipe(_if(isProduction, sourcemaps.init()))// Если передан ключ --production то sourcemap не пишется.
        .pipe(_if(!isProduction, uglify())) // Если передан ключ --production то css файл будет минимизирован и оптимизирован
        .pipe(_if(isProduction, sourcemaps.write() )) // Если передан ключ --production то sourcemap не пишется.
        .pipe(gulp.dest(production_js))
        .pipe(browserSync.reload({
            stream: true
        }))
});


//======================================================================================================================

//======================================================================================================================
//Оптимизация изображений
//======================================================================================================================
gulp.task('image', function () {
    // Оптимизация всех файлов кроме векторных
    gulp.src(dev_img + '**.' + image_ext)
        .pipe(plumber())
        // .pipe(imagemin({
        //     progressive      : false,
        //     interlaced       : true,
        //     optimizationLevel: 7
        // }))
        .pipe(rename(function (path) {
            path.basename = changeCase.lowerCase(path.basename); // Запись файлов в нижнем регистре вместе с расширением
            path.extname  = changeCase.lowerCase(path.extname);  // Запись файлов в нижнем регистре вместе с расширением
        }))
        .pipe(gulp.dest(production_img))
        .pipe(browserSync.reload({
			stream: true
		}));
    // Оптимизация векторных файлов ( пока только SVG )
    gulp.src(dev_img + '*.svg')
        .pipe(plumber())
        .pipe(svgmin())
        .pipe(rename(function (path) {
            path.basename = changeCase.lowerCase(path.basename);
            path.extname  = changeCase.lowerCase(path.extname);
        }))
        .pipe(gulp.dest(production_img))
        .pipe(browserSync.reload({
			stream: true
		}));
    gulp.src(dev_img + '**/*.svg')
        .pipe(plumber())
        .pipe(svgmin())
        .pipe(rename(function (path) {
            path.basename = changeCase.lowerCase(path.basename);
            path.extname  = changeCase.lowerCase(path.extname);
        }))
        .pipe(gulp.dest(production_img))
        .pipe(browserSync.reload({
			stream: true
		}));
});
//======================================================================================================================


//======================================================================================================================
//Ватчеры файлов
//======================================================================================================================
// Следят за всеми less файлами
// Так же следит за новыми файлами изображений - копирует их в рабочую директорию, оптимизирует и переводит в нижний регистр
// TODO: для картинок сделать CHANGED копирование и оптимизация только изменных файлов
// gulp.task('watch', function () {
//     // livereload.listen();
//     gulp.watch(dev_img + '*.*', {cwd: './'}, ['image']);
//     gulp.watch(dev_css + '*.less', {cwd: './'}, ['style']);
//     gulp.watch(dev_css + '**/*.less', {cwd: './'}, ['style']);
// });
gulp.task('watch', function () {
    browserSync.init({
        browser: ["google-chrome"],
        proxy: 'http://127.0.0.1:8000',
        notify: false,
        reloadDelay: 100,
        serveStatic: [production_css]
    });
    gulp.watch(dev_js + '*.*', {cwd: './'}, ['script']);
    gulp.watch(dev_img + '**/*', {cwd: './'}, ['image']);
    gulp.watch(dev_css + '*.less', {cwd: './'}, ['style']);
    gulp.watch(dev_css + '**/*.less', {cwd: './'}, ['style']);
    gulp.watch(html).on('change', browserSync.reload({
        stream: true
    }));
});


gulp.task('default', function () {
    gulp.start('script');
    gulp.start('image');
    gulp.start('style');
});

//======================================================================================================================

