module.exports = 
  build:
    options:
      mangle: false
      # sourceMap: true
      # compress: false
      # beautify: true
    files:
      'assets/js/stickypictures.min.js': [
        "assets/js/jquery-1.11.3.min.js"
        "bower_components/swiper/dist/js/swiper.jquery.umd.min.js"
        "assets/js/masonry.pkgd.min.js"
        "assets/js/isotope.pkgd.min.js"
        "assets/js/imagesloaded.pkgd.min.js"
        "assets/js/jquery.fitvids.js"
        "assets/js/froogaloop.min.js"
        "assets/js/project.js"
      ]
