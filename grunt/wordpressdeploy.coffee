module.exports =
  options:
    # backups_dir: "backups"
    rsync_args: [
      "--verbose"
      "--progress"
      "-rlpt"
      "--compress"
      "--omit-dir-times"
      "--delete"
    ]
    exclusions: [
      "Gruntfile.*"
      ".git/"
      "tmp/*"
      "backups/"
      "wp-config.php"
      "composer.json"
      "composer.lock"
      "README.md"
      ".gitignore"
      "package.json"
      "node_modules"
      ".DS_Store"
      "sftp-config.json"
      "codekit-config.json"
      "config.codekit"
      "*.less"  # Comment this line if you compile LESS at runtime (but why?)
      "backwpup-*"
      "grunt"
      "vendor"
      "*.coffee"
      "deployconfig.*"
      ".codekit-cache/"      
      # Grunt Build
      "releases/"
      "build/"
      # For Use with Roots Theme Setup
      "assets/less/"
      "assets/js/plugins"
      ".editorconfig" 
      ".bowerrc" 
      "bower.json"       
      # Theme-specific Exclusions
      "_Production/"
    ]

  local:
    title: "Local"
    database: "wordpress"
    table_prefix: "sticky_wp_"
    table_exclusions : [
      # "wfBadLeechers",
      # "wfBlocks",
      # "wfBlocksAdv",
      # "wfFileMods",
      # "wfHits"
    ]
    user: "admin"
    pass: "admin"
    host: "localhost"
    url: "//localhost:8888/stickypictures.com"
    path:
      theme: "/Applications/MAMP/htdocs/stickypictures.com/wp-content/themes/sticky-pictures/build/"
      uploads: "/Applications/MAMP/htdocs/stickypictures.com/wp-content/uploads/"
      plugins: "/Applications/MAMP/htdocs/stickypictures.com/wp-content/plugins/"


  # ==========  Start Environment Definitions  ==========

  live:
    title: "live"
    database: "client_db"
    table_prefix: "client_name_db_"
    table_exclusions : [
      "_wf" # Will exclude with " NOT LIKE '%_wf%' " SQL statement
    ]        
    user: "<%= grunt.config.data.deployconfig.live.db_user %>"
    pass: "<%= grunt.config.data.deployconfig.live.db_pass %>"
    host: "mysql.stickypictures.com"
    url: "//stickypictures.com"
    path:
      theme: "/home/client_name/client-site.com/wp-content/themes/client_name-theme/"
      uploads: "/home/client_name/client-site.com/wp-content/uploads/"
    ssh_host: "client_name@my.live.com"

  mt:
    title: "Media Temple"
    database: "db209892_wp"
    table_prefix: "sticky_wp_"
    table_exclusions : [
      # "_wf" # Will exclude with " NOT LIKE '%_wf%' " statement
    ]        
    port: 3306
    user: "<%= grunt.config.data.deployconfig.mt.db_user %>"
    pass: "<%= grunt.config.data.deployconfig.mt.db_pass %>"
    host: "internal-db.s209892.gridserver.com"
    url: "//s209892.gridserver.com"
    path:
      theme: "/nfs/c09/h01/mnt/209892/users/.home/domains/stickypictures.com/html/wp-content/themes/sticky-pictures/"
      uploads: "/nfs/c09/h01/mnt/209892/users/.home/domains/stickypictures.com/html/wp-content/uploads/"
      plugins: "/nfs/c09/h01/mnt/209892/users/.home/domains/stickypictures.com/html/wp-content/plugins/"
    ssh_host: "stickypictures.com@s209892.gridserver.com"
