module.exports =
  watch:
    files: ['assets/less/caliper.less']
    tasks: ['less:dev', 'minify']
    options:
      spawn: false
