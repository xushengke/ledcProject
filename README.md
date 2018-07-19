# Organ Donation #
Today, in Ontario, there are over 1500 people waiting for a life saving organ transplant. This is their only treatment option, and every 3 days someone will die because they did not get their transplant in time. But they can get help, when you register in our website and to be a donator. You let those waiting know that you would help them if you could. It is our purpose to do the webiste.
We will create a website to let people know about organ donation and encourage people to donate.
We will create a CMS system to collect the data from users and we will use grunt to compress the files.

## Getting Started ##

We just create the folder and add the environment to get started.


### Prerequisites ###

What things you need to install the software and how to install them

>We need to install node.js
>
>Open the node.js website and download the 8.9.4 LTS version of node.js.
>

### Installing ###

A step by step series of examples that tell you have to get a development env running

Say what the step will be

>Use terminal to get into the project main folder
>
>Then use the command "npm init" to install the modules that we need.
>
>Then use the command "npm install --save grunt" to install grunt.

And repeat

>The third step to install "watch", "sass", "uglify" and "concat"

End with an example of getting some data out of the system or using it for a little demo

## Running the tests ##

Touch a gruntfile.js to write the code.

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

### Break down into end to end tests ###

>Run "sodu grunt" in terminal to see if the tests are done.


### And coding style tests ###

Explain what these tests test and why

    concat : {
        dist: {
          src: [
            'js/my_modules/*.js',
            'js/main.js'
          ],
          dest: 'prod/production.js'
        }
      },
>This is to compress the three javascript files in to one file and create production.js.

      uglify: {
    my_target: {
      files: {
        'prod/production.min.js': ['prod/production.js']
      }
    }
    },
>This is to compress the production.js.

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
>This is to watch the changes in javascripts and css.

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

>This is to compress the scss file to create a css file.

  
  

## Deployment ##

Add additional notes about how to deploy this on a live system
