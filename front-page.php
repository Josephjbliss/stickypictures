<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part('templates/slider','posts');
    ?>
    <div class="masonry-stamp home-blurb">
      <div class="home-blurb-1"><?php the_field('home_blurb_1'); ?></div>
    </div>
    <section class="masonry home-masonry-wrap">
      <?php
        $projects = get_field('featured_projects');
      ?>
      <?php
        global $post_count;
        foreach ( $projects as $post_count => $post ):
          setup_postdata( $post );
          get_template_part('templates/content', 'project' );
        endforeach; wp_reset_postdata();
      ?>
    </section>
    <?php
  }
}
get_footer();

?>