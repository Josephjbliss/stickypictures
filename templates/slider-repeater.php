<?php
global $post;
$slides = get_field('slides_repeater');
if( !empty( $slides ) ) :
  ?>      

  <section class="slideshow">
    <div class="dots">
      <?php for ($i=0; $i < count( $slides ); $i++) : ?>
        <span class="dot <?php echo $i == 0 ? 'current' : ''; ?>"></span>
      <?php endfor; ?>
    </div>

    <div class="slides">
      <?php for ($i=0; $i < count( $slides ); $i++) :
        $src = !empty( $slides[ $i ]['image'] ) ? $slides[ $i ]['image']['url'] : 'http://placehold.it/1200x500?text=' . $slides[ $i ]['caption']
      ?>
        <img src="<?php echo $src; ?>">
      <?php endfor; ?>
    </div>

    <div class="caption antialiased">
      <?php
      for ($i=0; $i < count( $slides ); $i++) :
      ?>
        <h2 <?php echo $i == 0 ? 'class="current"' : ''; ?>>
          <?php
          $link = $slides[ $i ]['link'] ? get_permalink( $slides[ $i ]['link']->ID ) : false;
          $caption_format = $link ? '<a href="%2$s" alt=%1$s"><span>%1$s</span></a>' : '<span>%1$s</span>' ;
          echo sprintf( $caption_format, $slides[ $i ]['caption'], $link );
          ?>
        </h2>
      <?php endfor; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php
endif;
?>