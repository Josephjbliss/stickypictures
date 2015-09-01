<?php
get_header();

if ( have_posts() ) :
  while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php
  endwhile;
endif;
get_footer();

?>