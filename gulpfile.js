var gulp 		= require('gulp');
var uglify		= require('gulp-uglify');
var cleancss	= require('gulp-clean-css');
var sass		= require('gulp-sass');

// Exercise: Create a Javascript PATH variable that you can use in both places on lines 16 and 28 and replace those hard coded directories with the variable.

var sass_dir = 'dev/*.scss';

gulp.task('process_sass', function(){
	console.log('Now processing SASS.');
	return gulp.src(sass_dir)
		.pipe(sass({
			outputStyle : 'compressed'
		}))
		.pipe(gulp.dest('wp-content/themes/twentyfifteen/css'));
});

/*
gulp.task('minify_css_and_copy', function(){
	
	var d = new Date();
	var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	
	console.log('Minifying CSS at ' + timestamp);
	
	return gulp.src(['dev/css1.css', 'dev/*.css'])
	.pipe(cleancss())
	.pipe(concat('main.css'))
	.pipe(gulp.dest('wp-content/themes/twentyfifteen/css'));

});
*/

gulp.task('php', function(){
	console.log('You have changed a WordPress PHP file.');
});

gulp.task('watch', function(){
	gulp.watch('dev/*.css',['minify_css_and_copy']);
	gulp.watch(sass_dir,['process_sass']);
	gulp.watch('./wp-content/**/**/*.php',['php']);
	console.log('You have changed a new file.');
});

gulp.task('message', function (){
	console.log('This is a message');
});

gulp.task('default', ['message','watch','process_sass']);