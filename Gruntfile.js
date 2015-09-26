'use strict';
 
module.exports = function (grunt) {
    // load all grunt tasks
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.initConfig({
        watch: {
            // if any .less file changes in directory "public/css/" run the "less"-task.
            files: "public/src/less/*.less",
            tasks: ["less"]
        },
        // "less"-task configuration
        less: {
          dev: {
            files: {
              'public/css/main.css': 'public/src/less/*.less'
            }
          }
        }
    });
     // the default task (running "grunt" in console) is "watch"
     grunt.registerTask('default', ['watch']);
};