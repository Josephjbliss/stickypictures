module.exports = 
  dev:
    options:
      mangle: false
      sourceMap: true
      compress: false
      beautify: true
    files:
      'assets/js/stickypictures.min.js': [
        # "assets/js/jquery-1.11.3.min.js"
        "assets/vendor/swiper/dist/js/swiper.jquery.umd.min.js"
        "assets/vendor/jquery_lazyload/jquery.lazyload.js"
        # "bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js"
        "assets/js/masonry.pkgd.min.js"
        "assets/js/isotope.pkgd.min.js"
        "assets/js/imagesloaded.pkgd.min.js"
        "assets/js/jquery.fitvids.js"
        "assets/js/froogaloop.min.js"
        "assets/js/grid-functions.js"
        "assets/js/project.js"
      ]
  dist:
    options:
      mangle: false
    files:
      'assets/js/stickypictures.min.js': [
        # "assets/js/jquery-1.11.3.min.js"
        "assets/vendor/swiper/dist/js/swiper.jquery.umd.min.js"
        "assets/vendor/jquery_lazyload/jquery.lazyload.js"
        # "bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js"
        "assets/js/masonry.pkgd.min.js"
        "assets/js/isotope.pkgd.min.js"
        "assets/js/imagesloaded.pkgd.min.js"
        "assets/js/jquery.fitvids.js"
        "assets/js/froogaloop.min.js"
        "assets/js/grid-functions.js"
        "assets/js/project.js"
      ]
