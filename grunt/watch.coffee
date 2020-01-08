module.exports =
  css:
    files: ['assets/less/caliper.less','static/css/main.css']
    tasks: ['less:dev', 'autoprefixer', 'minify:dev']
    options:
      spawn: false
      # livereload : true      
  js:
    files: ['assets/js/caliper.js','assets/js/project.js','assets/js/grid-functions.js']
    tasks: ['uglify:dev']
    options:
      spawn: false
      # livereload : true
  notify_js:
    files: ['assets/js/project.js','assets/js/grid-functions.js']
    tasks: ['notify:notify_hooks']
    options:
      spawn: false
  notify_css:
    files: ['assets/less/caliper.less','static/css/main.css']
    tasks: ['notify:css']
    options:
      spawn: false
