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

  <section class="slideshow">
    <div class="dots">
      <?php for ($i=0; $i < count( $projects ); $i++) : ?>
        <span class="dot <?php echo $i == 0 ? 'current' : ''; ?>"></span>
      <?php endfor; ?>
    </div>

    <div class="slides">
      <?php for ($i=0; $i < count( $projects ); $i++) :
        $src = !empty( $projects[ $i ]['img'] ) ? $projects[ $i ]['img']['url'] : 'http://placehold.it/1200x500?text=' . $projects[ $i ]['title']
      ?>
        <img src="<?php echo $src; ?>">
      <?php endfor; ?>
    </div>

    <div class="caption antialiased">
      <?php
      for ($i=0; $i < count( $projects ); $i++) :
      ?>
        <h2 <?php echo $i == 0 ? 'class="current"' : ''; ?>>
          <span class="client"><?php echo $projects[ $i ]['client'] ?>.</span>
          <a href="<?php echo $projects[ $i ]['link']; ?>" alt="<?php echo $projects[ $i ]['title'] ?>"><?php echo $projects[ $i ]['project_name']; ?></a>
        </h2>
      <?php endfor; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php
endif;
?>