<?php
$slides = get_field('slides');
if( !empty( $slides ) ) :
  ?>
  <section class="slideshow">
    <div class="dots">
      <?php for ($i=0; $i < count( $slides ); $i++) : ?>
        <span class="dot <?php echo $i == 0 ? 'current' : ''; ?>"></span>
      <?php endfor; ?>
    </div>

    <div class="slides">
      <?php for ($i=0; $i < count( $slides ); $i++) : ?>
        <img src="<?php echo $slides[$i]['image']['url']; ?>">
      <?php endfor; ?>
    </div>

    <div class="caption antialiased">
      <?php
      for ($i=0; $i < count( $slides ); $i++) :
        $post = $slides[$i]['project'];
        setup_postdata( $post );
      ?>
        <h2 <?php echo $i == 0 ? 'class="current"' : ''; ?>>
          <span class="client"><?php the_field('client'); ?>.</span>
          <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_field('project_name'); ?></a>
        </h2>
      <?php endfor; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php
endif;
?>