<?php
get_header();

if ( have_posts() ) :
  ?>
  <section class="masonry">
    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part('templates/content', 'project' );

    endwhile;?>
  </section>
  <?php
endif;
get_footer();

?>