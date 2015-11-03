<?php
global $post;
$classes = array('masonry-element home-project');
$is_work_page = is_post_type_archive( project_cpt_name() );
$classes[] = $is_work_page ? 'work-project' : '';
$has_thumb = false;

if ( has_post_thumbnail() ) {
  $has_thumb = true;
  $thumb_id = get_post_thumbnail_id( $post->ID );
  $thumb_data = wp_get_attachment_metadata( $thumb_id );
  $w = $thumb_data['width'];
  $h = $thumb_data['height'];
}

?>
<div <?php post_class( $classes ); ?> style="<?php echo 'background-color:'.get_field('bg_color').';'; //echo "width:${w}px;height:${h}px;"; ?>" >
  <?php if ( $has_thumb ): ?>
    <!-- <img src="<?php echo wp_get_attachment_url( $thumb_id ); ?>" alt="<?php the_title(); ?>"> -->
     <img class="lazy" data-original="<?php echo wp_get_attachment_url( $thumb_id ); ?>" width="<?php echo $w; ?>" height="<?php echo $h; ?>"> 
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
