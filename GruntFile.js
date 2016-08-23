module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: ['assets/css/sass/*.scss'],
				tasks: ['sass:dist']
			}
		},
		sass: {
			options: {
				sourceMap: true,
				outputStyle: 'expanded',
				sourceComments: false
			},
			dist: {
				files: {
					'assets/css/themepack.css': 'assets/css/sass/importer.scss'
				}
			}
		}
	});
	grunt.registerTask('default', ['sass:dist', 'watch']);
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
};
/*Dunhakdis Set-up*/
/*1.0 Use [npm install grunt --save-dev]*/
/*1.1 Use [npm install grunt-sass --save-dev]*/
/*1.2 Use [npm install grunt-contrib-watch --save-dev]*/
/*2.0 Use Grunt command to start a project*/
