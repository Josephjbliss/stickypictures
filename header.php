<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap container" role="document">
    <?php get_template_part('templates/nav'); ?>
    <div class="content row">
      <main class="main" role="main">

