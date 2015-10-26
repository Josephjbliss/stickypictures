<?php
global $post;
$slides = get_field('slides_repeater');
if( !empty( $slides ) ) :
  ?>      
  <section class="swiper-container slideshow">
    <div class="swiper-wrapper">
      <?php
      for ($i=0; $i < count( $slides ); $i++) :
      ?>
        <div class="swiper-slide">
          <?php
        $src = !empty( $slides[ $i ]['image'] ) ? $slides[ $i ]['image']['url'] : 'http://placehold.it/1200x500?text=' . $slides[ $i ]['caption']
          ?>
          <img src="<?php echo $src; ?>">
          <div class="caption antialiased">
            <h2 <?php echo $i == 0 ? 'class="current"' : ''; ?>>
              <?php
              $link = $slides[ $i ]['link'] ? get_permalink( $slides[ $i ]['link']->ID ) : false;
              $caption_format = $link ? '<a href="%2$s" alt=%1$s"><span>%1$s</span></a>' : '<span>%1$s</span>' ;
              echo sprintf( $caption_format, $slides[ $i ]['caption'], $link );
              ?>
            </h2>
          </div>

        </div>
      <?php endfor; wp_reset_postdata(); ?>      
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>    
  </section>

  <?php
endif;
?>