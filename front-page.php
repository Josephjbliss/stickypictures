<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part('templates/slider','posts');
    ?>
    <section class="masonry">
      <div class="masonry-stamp home-blurb">
        <p class="home-blurb-1"><?php the_field('home_blurb_1', false, false); ?></p>
        <p class="home-blurb-2"><?php the_field('home_blurb_2', false, false); ?></p>
      </div>
      <?php
        $projects = get_field('featured_projects');
      ?>
      <?php
        foreach ( $projects as $post ):
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