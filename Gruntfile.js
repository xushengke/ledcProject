module.exports = function(grunt) {
  grunt.initConfig({
  //  pkg: grunt.file.readJSon('package.json'),

    concat : {
        dist: {
          src: [
            'js/my_modules/*.js',
            'js/main.js'
          ],
          dest: 'prod/production.js'
        }
      },

      uglify: {
    my_target: {
      files: {
        'prod/production.min.js': ['prod/production.js']
      }
    }
  },

      watch: {
        scripts: {
          files: ['js/main.js', 'js/my_modules/*.js'],
          tasks: ['concat', 'uglify'],
          options: {
            spawn: false
          }
        },

        sass: {
          files: ['sass/main.scss', 'sass/modules/*.scss'],
          tasks: ['sass']
        }
      },

      sass: {
        dist: {
          options: {
            style: 'compressed'
          },
          files: {
            'css/main.css':'sass/main.scss'
          }
        }
      }
});


  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');

  grunt.registerTask('default', ['concat', 'uglify', 'sass']);
  grunt.registerTask('watchFiles', ['watch', 'sass']);
};
