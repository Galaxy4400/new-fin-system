export const server = (done) => {
	app.plugins.browsersync.init({
		proxy: "http://fin_system_2.local:8080", // Apache virtual host
		notify: false,
		port: 3000,
		open: true, // можно false, если не хочешь автооткрытие
	});
	done();
};
