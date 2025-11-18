export const copy = () => {
	// Копируем обычные файлы
	app.gulp.src(app.path.src.files).pipe(app.gulp.dest(app.path.build.files));

	// Копируем языки
	app.gulp.src(app.path.src.langs).pipe(app.gulp.dest(app.path.build.langs));

	// Копируем .htaccess в корень билда
	return app.gulp.src(app.path.src.htaccess, { dot: true }).pipe(app.gulp.dest(app.path.buildFolder));
};
