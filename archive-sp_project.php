<?php
get_header();

if ( have_posts() ) :
  ?>
  <section class="tag-filters-wrap">
    <ul class="tag-filters">
      <li class="tag-list-el">
        <a href="#all" class="filter-link is-checked" data-filter="*">All</a>
      </li>
      <?php 
        $tags = get_tags();
        foreach ( $tags as $tag ) {
          $tag_link = get_tag_link( $tag->term_id );
          ?>
            <li class="tag-list-el">
              <a href="#<?php echo $tag->slug; ?>"
                 title="<?php echo $tag->name; ?> Tag"
                 data-filter=".tag-<?php echo $tag->slug; ?>"
                 class="filter-link">
                <?php echo $tag->name; ?>
              </a>
            </li>
          <?php
        }
        ?>
    </ul>
  </section>

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