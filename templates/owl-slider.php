<div class="slider-wrap">
  <div class="container slider-content text-center">
    <!-- <h1><em>Slider</em></h1> -->
  </div>
  <?php

  if( have_rows('slides') ): ?>
    <ul class="owl-slider">
      <?php while( have_rows('slides') ): the_row();
        $image = get_sub_field('image');
      ?>
        <li class="slide">
          <div class="caption-wrap">
            <div class="meta-info">September 3-7</div>
            <h2 class="caption"><?php the_sub_field('caption'); ?></h2>
          </div>
          <div class="image-wrap">
            <div class="slider-gradient"></div>
            <?php if ( get_sub_field('related_post') ):
              $related_post = get_sub_field('related_post');
              $post = $related_post[0];
              setup_postdata( $post );
            ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                 <img src="<?php echo $image['sizes']['slider-image']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
              <img src="<?php echo $image['sizes']['slider-image']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else: ?>
    <img class="img-responsive" src="http://placehold.it/2800x960&text=Slider Image" alt="Slider Image">
  <?php endif; ?>
</div>