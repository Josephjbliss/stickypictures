deployconfig = require('./deployconfig.json')

module.exports = (grunt) ->

  require('load-grunt-config')(grunt,
    config:
      deployconfig : deployconfig
      pkg: grunt.file.readJSON('package.json')      
  )

  # Register tasks
  grunt.registerTask "default", ["watch"]
  grunt.registerTask "minify:dev", [
    "uglify:dev"
    "cssmin:dev"
  ]
  grunt.registerTask "minify:dist", [
    "uglify:dist"
    "cssmin:dist"
  ]
  grunt.registerTask "deploy", ["build", "push_theme"]
  grunt.registerTask "build", ["less", "minify:dist", "clean:build", "copy:build", "compress:build"]

  return

