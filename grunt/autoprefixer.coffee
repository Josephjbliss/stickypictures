module.exports =
  options:
    remove: false # dont remove outdated cross browser declarations
    diff: 'assets/css/tmp/caliper.css.diff'
  caliper:
    src: 'assets/css/caliper.css'
    dest: 'assets/css/caliper.ap.css'