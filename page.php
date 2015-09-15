<?php
get_header();

if ( have_posts() ) :
  while (have_posts()) : the_post(); ?>
    <?php
    if( get_field('slides') ) :
      get_template_part('templates/slider','posts');
    elseif( get_field('slides_repeater') ) :
      get_template_part('templates/slider','repeater');
    endif;
    ?>
    <?php
    // Get content-specific template or use default page
    $slug = sanitize_title( get_the_title() );
    $tpl = "templates/content-page-$slug.php";
    $tpl_exists = locate_template( $tpl );
    if( $tpl_exists ) :
      get_template_part('templates/content-page', $slug);
    else:
      get_template_part('templates/content-page', 'default');
    endif;

    ?>
  <?php
  endwhile;
endif;
get_footer();

?>