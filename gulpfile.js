var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');


/*
 * VARIÁVEIS
 */

 //SAS Origem
 var scssFiles = './sass/**/*.sass';

 //CSS Dsttino
var cssDest = './css';

//Opção para desenvolvimento
var sassDevOptions = {
	outputStyle: 'expanded'
}

//Opção para produção
var sassProdOptions = {
	outputStyle: 'compressed'
}

/*Tasks
 *
 */
//Task 'sassdev' Executa o comando 'gulp sassdev'
gulp.task('sassdev', function(){
	return gulp.src(scssFiles)
		.pipe(sass(sassProdOptions).on('error', sass.logError))
		.pipe(gulp.dest(cssDest));
});

//Tak 'sassprod' - Executa o comando 'gulp sassprod'
/*
gulp.task('sassprod', function(){
	return gulp.src(scssFiles)
		.pipe(sass(sassProdOptions).on('error', sass.logError))
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest(cssDest));
});
*/
//Task 'watch' - Executa comando 'gulp watch'
gulp.task('watch', function(){
	gulp.watch(scssFiles, ['sassdev']);
});

//Default task - Executa do comando 'gulp'
gulp.task('default',['sassdev','watch']);