module.exports =
  css:
    files: ['assets/less/caliper.less']
    tasks: ['less:dev', 'minify:dev']
    options:
      spawn: false
  js:
    files: ['assets/js/caliper.js']
    tasks: ['uglify:build']
    options:
      spawn: false
