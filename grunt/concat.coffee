module.exports = 
  build:
    options:
      separator: ';\n\n'
      banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %> */\n'
    src: [
      "js/jquery-1.11.3.min.js"
      "js/masonry.pkgd.min.js"
      "js/imagesloaded.pkgd.min.js"
      "js/jquery.fitvids.js"
      "js/froogaloop.min.js"
      "js/project.js"
    ]
    dest: "js/stickypictures.js"