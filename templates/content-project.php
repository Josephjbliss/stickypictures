<?php global $post; ?>
<div class="masonry-element home-project">
 <?php if ( has_post_thumbnail() ): ?>
  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php the_title(); ?>">
 <?php else: ?>
  <img src="http://placehold.it/600x400/<?php echo str_replace('#', '', get_field('bg_color') );  ?>/FFFFFF/?text=<?php the_title(); ?>">
 <?php endif; ?>
  <div class="home-project-text antialiased" style="<?php project_bg_style(); ?>">
    <h3 class="client"><?php the_field('client'); ?></h3>
    <h3 class="project"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_field('project_name'); ?></a></h3>
    <div class="tags">
      <?php project_tags(); ?>
    </div>
  </div>
</div>