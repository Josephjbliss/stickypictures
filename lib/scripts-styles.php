<?php

define('THEME_URL', get_bloginfo('stylesheet_directory').'/');


function client_scripts($hook) {

    // Main Client Script
    wp_enqueue_script(
      THEME_PREFIX .'-main-js',
      THEME_URL . 'assets/js/main.min.js',
      array('jquery','underscore')
    );
    
}
add_action( 'wp_enqueue_scripts', 'client_scripts' );


function client_styles() {

    global $wp_styles;

    // Main Stylesheet
    wp_register_style( THEME_PREFIX . '-theme', THEME_URL . 'assets/css/main.min.css' );
    wp_enqueue_style( THEME_PREFIX . '-theme' );

    wp_enqueue_style( THEME_PREFIX . '-ie', THEME_URL . "assets/css/ie.css", array( THEME_PREFIX . '-theme' )  );
    $wp_styles->add_data( THEME_PREFIX . '-ie', 'conditional', 'IE' );    

}
add_action( 'wp_enqueue_scripts', 'client_styles' );


// function admin_styles() {
//     wp_register_style( THEME_PREFIX . '-admin-css', THEME_URL . 'assets/css/admin.css', false );
//     wp_enqueue_style( THEME_PREFIX . '-admin-css' );
// }
// add_action('admin_enqueue_scripts', 'admin_styles');

?>