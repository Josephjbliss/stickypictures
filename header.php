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
<body <?php body_class(); ?>>
  <div class="wrap container" role="document">
    <?php get_template_part('templates/nav'); ?>
    <div class="content row">
      <main class="main" role="main">

