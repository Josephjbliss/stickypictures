<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part('templates/slider');
    ?>
    <section class="masonry">
      <div class="masonry-stamp home-blurb">
        <p class="home-blurb-1"><?php the_field('home_blurb_1', false, false); ?></p>
        <p class="home-blurb-2"><?php the_field('home_blurb_2', false, false); ?></p>
      </div>
      <?php
        $projects = cpt_query( project_cpt_name() );
      ?>
      <?php
        foreach ( $projects->posts as $i => $post ):
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