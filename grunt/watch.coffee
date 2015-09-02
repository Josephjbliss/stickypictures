module.exports =
  watch:
    files: ['assets/less/caliper.less']
    tasks: ['less:dev', 'minify:dev']
    options:
      spawn: false
