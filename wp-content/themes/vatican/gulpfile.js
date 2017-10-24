var gulp = require('gulp');
var	imagemin = require('gulp-imagemin');
var	pngquant = require('imagemin-pngquant');
var	uglify = require('gulp-uglify');
var	concat = require('gulp-concat');
var	cssMin = require('gulp-css');
var jshint = require('gulp-jshint');
var htmlclean = require('gulp-htmlclean');
var rename = require("gulp-rename"); 
var sass = require('gulp-sass'); 
var browserSync = require('browser-sync').create();

 
gulp.task('lint', function() {
  return gulp.src('./js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
}); 


gulp.task('min-img', function() {
	gulp.src('img/**/*')
	.pipe(imagemin({ 
		progressive: true,
		svgoPlugins: [{removeViewBox: false}],
		use: [pngquant()]
	}))
	.pipe(gulp.dest('img'));  
}); 


gulp.task('min-css', function() {
	gulp.src([
		'./node_modules/bootstrap/dist/css/bootstrap.min.css',
		'./node_modules/font-awesome/css/font-awesome.min.css'
	])
	.pipe(concat('libs.css'))
	.pipe(cssMin())
	.pipe(gulp.dest('css')); 
}); 




gulp.task('min-js', function() {
	gulp.src([
		'./node_modules/jquery/dist/jquery.js',
		'./node_modules/popper.js/dist/umd/popper.js',  
		'./node_modules/bootstrap/dist/js/bootstrap.js'
	]) 
	.pipe(concat('libs.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js')); 
}); 
 
 
 /*
gulp.task('min-js-topo', function() {
	gulp.src([
		'./node_modules/jquery/dist/jquery.min.js'
	]) 
	.pipe(concat('libs-topo.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js')); 
}); 
 
*/

gulp.task('min-html', function() {
  return gulp.src('./html/*.html')
    .pipe(htmlclean({
        protect: /<\!--%fooTemplate\b.*?%-->/g,
        edit: function(html) { return html.replace(/\begg(s?)\b/ig, 'omelet$1'); }
      }))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./html/comprimido'));  
});





// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy:'localhost/bilhares/bilhares/' 
    });

    gulp.watch("scss/style.scss", ['sass']); 
    gulp.watch("html/*.html").on('change', browserSync.reload);
    gulp.watch("*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/style.scss") 
      	.pipe(sass().on('error', sass.logError))
      	.pipe(cssMin()) 
        .pipe(gulp.dest("./")) 
        .pipe(browserSync.stream()); 
}); 


/*
gulp.task('min-css2', ['sass'], function() {
 
  	 gulp.src('./style.css') 
        .pipe(cssMin()) 
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./'));


});  
*/


gulp.task('server', ['serve']);  
 




/*
gulp.task('watch-css', ['sass:watch'], function() {  
	gulp.watch('css/style.css' , ['min-css2']);  
}); 


gulp.task('watch-html', ['sass:watch'], function() {  
	gulp.watch('html/*.html' , ['min-html']);   
});  

 

 */

 /**************************/
//gulp.task('watch', ['sass:watch','watch-css','watch-html']);    