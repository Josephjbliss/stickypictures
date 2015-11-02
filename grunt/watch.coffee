module.exports =
  css:
    files: ['assets/less/caliper.less','static/css/main.css']
    tasks: ['less:dev', 'minify:dev']
    options:
      spawn: false
  js:
    files: ['assets/js/caliper.js','assets/js/project.js']
    tasks: ['uglify:build']
    options:
      spawn: false
  notify:
    files: ['assets/js/project.js','assets/less/caliper.less']
    tasks: ['notify:notify_hooks']
    options:
      spawn: false
