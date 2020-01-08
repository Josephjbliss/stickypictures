module.exports = 
  dev:
    options:
      shorthandCompacting: false
      roundingPrecision: -1
      sourceMap : true
      keepBreaks: true
    files:
      'assets/css/stickypictures.min.css' : [
        'node_modules/swiper/css/swiper.min.css'
        # 'bower_components/lazyloadxt/dist/jquery.lazyloadxt.fadein.css'
        'static/css/reset.css'
        'static/css/main.css'
        'assets/css/caliper.ap.css'
      ]
  dist:
    options:
      shorthandCompacting: false
      roundingPrecision: -1
    files:
      'assets/css/stickypictures.min.css' : [
        'node_modules/swiper/css/swiper.min.css'
        # 'bower_components/lazyloadxt/dist/jquery.lazyloadxt.fadein.css'
        'static/css/reset.css'
        'static/css/main.css'
        'assets/css/caliper.ap.css'
      ]