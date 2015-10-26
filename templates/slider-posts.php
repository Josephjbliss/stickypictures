<?php
$projects = array();
$slides = get_field('slides');
if( !empty( $slides ) ) :
  // Build slide hash to get content for all sections
  foreach ( $slides as $i => $post ): setup_postdata($post);
    $projects[] = array(
      'id' => $post->ID,
      'client' => get_field('client'),  
      'project_name' => get_field('project_name'),  
      'img' => get_field('showcase_image'),  
      'link' => get_permalink(),  
      'title' => get_the_title()
    );
  endforeach; wp_reset_postdata();
  ?>      

  <section class="swiper-container slideshow">
    <div class="swiper-wrapper">
      <?php
      for ($i=0; $i < count( $projects ); $i++) :
      ?>
        <div class="swiper-slide">
          <?php
            $src = !empty( $projects[ $i ]['img'] ) ? $projects[ $i ]['img']['url'] : 'http://placehold.it/1200x500?text=' . $projects[ $i ]['title']
          ?>
          <img src="<?php echo $src; ?>">
          <div class="caption antialiased">
            <h2 <?php echo $i == 0 ? 'class="current"' : ''; ?>>
              <span class="client"><?php echo $projects[ $i ]['client'] ?></span>
              <a href="<?php echo $projects[ $i ]['link']; ?>" alt="<?php echo $projects[ $i ]['title'] ?>"><?php echo $projects[ $i ]['project_name']; ?></a>
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