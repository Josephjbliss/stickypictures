module.exports = 
  dev:
    options:
      shorthandCompacting: false
      roundingPrecision: -1
      sourceMap : true
    files:
      'assets/css/stickypictures.min.css' : [
        'static/css/reset.css'
        'static/css/main.css'
        'assets/css/caliper.css'
      ]
  dist:
    options:
      shorthandCompacting: false
      roundingPrecision: -1
    files:
      'assets/css/stickypictures.min.css' : [
        'static/css/reset.css'
        'static/css/main.css'
        'assets/css/caliper.css'
      ]