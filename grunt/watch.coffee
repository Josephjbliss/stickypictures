module.exports =
  css:
    files: ['assets/less/caliper.less','static/css/main.css']
    tasks: ['less:dev', 'minify:dev', 'autoprefixer']
    options:
      spawn: false
  js:
    files: ['assets/js/caliper.js','assets/js/project.js']
    tasks: ['uglify:build']
    options:
      spawn: false
  notify_js:
    files: ['assets/js/project.js']
    tasks: ['notify:notify_hooks']
    options:
      spawn: false
  notify_css:
    files: ['assets/less/caliper.less','static/css/main.css']
    tasks: ['notify:css']
    options:
      spawn: false
