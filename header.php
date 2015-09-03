<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>
<?php 

// Set classes to match static stickypictures
$classes = array();
if( is_singular( THEME_PREFIX . '_project') ) {
  $classes[] = 'project-page';
} elseif ( is_post_type_archive( THEME_PREFIX . '_project') ) {
  $classes[] = 'projects-archive-page';
} elseif ( is_front_page() ) {
  $classes[] = 'home-page';
} else {
  $classes[] = sanitize_title( get_the_title() ) . '-page';
}

?>
<body <?php body_class( $classes ); ?>>
  <div class="wrap container" role="document">
    <?php get_template_part('templates/nav'); ?>
    <div class="content row">
      <main class="main" role="main">

