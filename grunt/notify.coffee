module.exports =
  notify_hooks: 
    options: 
      enabled: true
      max_jshint_notifications: 5 # maximum number of notifications from jshint output
      title: "Sticky Pictures" # defaults to the name in package.json, or will use project directory's name
      success: true # whether successful grunt executions should be notified automatically
      duration: 1 # the duration of notification in seconds, for `notify-send only
      message : "Uglified"
