module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                includePaths: ['assets/sass']
            },
            dist: {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'assets/css/style.css': 'assets/sass/style.scss'
                }
            }
        },
        concat: {
            options: {
                separator: '\n'
            },
            dist: {
                src: ['assets/js/plugins/*.js'],
                dest: 'assets/js/app.js'
            }
        },
        watch: {
            grunt: {
                files: ['Gruntfile.js']
            },
            sass: {
                files: 'assets/sass/*.scss',
                tasks: ['sass']
            },
            scripts: {
                files: 'assets/js/plugins/*.js',
                tasks: ['dev-watch'],
                options: {
                    interrupt: true
                }
            }
        },
        
        uglify: {
            options: {
                banner: ""
            },
            build: {
                src: 'assets/js/plugins/*.js',
                dest: 'assets/js/app.js'
            }
        }
    });
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('build', ['sass']);
    grunt.registerTask('dev-watch', ['concat:dist', 'uglify']);
    grunt.registerTask('default', ['concat', 'uglify', 'watch']);
}