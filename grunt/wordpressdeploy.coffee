module.exports =
  options:
    # backups_dir: "backups"
    rsync_args: [
      "--verbose"
      "--progress"
      "-rlpt"
      "--compress"
      "--omit-dir-times"
      # "--delete"
      # "--dry-run"
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
    database: "stickypictures"
    table_prefix: "sticky_wp_"
    table_exclusions : [
      # "wfBadLeechers",
      # "wfBlocks",
      # "wfBlocksAdv",
      # "wfFileMods",
      # "wfHits"
    ]
    user: "<%= deployconfig.local.db_user %>"
    pass: "<%= deployconfig.local.db_pass %>"    
    host: "localhost"
    url: "//stickypictures.test"
    path:
      theme   : "<%= deployconfig.local.wp_content_path %>/themes/<%= theme_name %>/build/"
      uploads : "<%= deployconfig.local.wp_content_path %>/uploads/"
      plugins : "<%= deployconfig.local.wp_content_path %>/plugins/"


  # ==========  Start Environment Definitions  ==========

  # dev:
  #   title: "Dev Server"
  #   database: "clients"
  #   table_prefix: "sticky_wp_"
  #   table_exclusions : [
  #     # "_wf" # Will exclude with " NOT LIKE '%_wf%' " statement
  #   ]
  #   user: "<%= deployconfig.dev.db_user %>"
  #   pass: "<%= deployconfig.dev.db_pass %>"
  #   host: "127.0.0.1"
  #   url: "//clients.madebycaliper.com/stickypictures"
  #   path:
  #     theme   : "<%= deployconfig.dev.wp_content_path %>/themes/<%= theme_name %>/"
  #     uploads : "<%= deployconfig.dev.wp_content_path %>/uploads/"
  #     plugins : "<%= deployconfig.dev.wp_content_path %>/plugins/"
  #   ssh_host: "serverpilot@ssh.madebycaliper.com"

  live:
    title: "Media Temple"
    database: "db209892_wp"
    table_prefix: "sticky_wp_"
    table_exclusions : [
      # "_wf" # Will exclude with " NOT LIKE '%_wf%' " statement
    ]
    port: 3306
    user: "<%= deployconfig.live.db_user %>"
    pass: "<%= deployconfig.live.db_pass %>"
    host: "internal-db.s209892.gridserver.com"
    url: "//stickypictures.com"
    path:
      theme   : "<%= deployconfig.live.wp_content_path %>/themes/<%= theme_name %>/"
      uploads : "<%= deployconfig.live.wp_content_path %>/uploads/"
      plugins : "<%= deployconfig.live.wp_content_path %>/plugins/"
    ssh_host: "stickypictures.com@s209892.gridserver.com"
