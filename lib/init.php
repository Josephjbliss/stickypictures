<?php
/**
 * Bolt initial setup and constants
 */
function bolt_setup() {
  // Make theme available for translation
  // @TODO add correct .pot file n stuff
  load_theme_textdomain('bolt', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'bolt'),
    'footer_navigation' => __('Footer Navigation', 'bolt')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

  // Tell the TinyMCE editor to use a custom stylesheet
  // add_editor_style('/assets/css/editor-style.css');

  if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
      'page_title'  => __('Sticky Info'),
      'menu_title'  => __('Sticky Info + Contact'),
      'menu_slug'   => 'site-options',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));

  }

}
add_action('after_setup_theme', 'bolt_setup');


/**
 * Change what Editor users can see
 */
function sticky_modify_editor_roles() {

  // get the the role object
  $role_object = get_role( 'editor' );

  // add $cap capability to this role object
  $role_object->add_cap( 'edit_theme_options' );
}  
add_action( 'init', 'sticky_modify_editor_roles' );


function sticky_allow_non_admins_to_change_site_identity( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->capability = 'edit_theme_options'; // or edit_posts or whatever capability your site owner has
    $wp_customize->get_setting( 'blogdescription' )->capability = 'edit_theme_options'; // or edit_posts or whatever capability your site owner has
}
add_action( 'customize_register', 'sticky_allow_non_admins_to_change_site_identity', 1000 );


/**
 * Register sidebars
 */
function bolt_widgets_init() {
  register_sidebar(array(
    'name'          => __('Primary', 'bolt'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'bolt'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
// add_action('widgets_init', 'bolt_widgets_init');
