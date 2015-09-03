<?php

function project_cpt_name() {
  return THEME_PREFIX . '_project';
} // END project_cpt_name()

function project_tags() {
  global $post;
  the_tags( $before = '', $sep = ' ', $after = '');
} // END project_tags()

function project_bg_style() {
  global $post;
  echo 'background-color: ' . get_field('bg_color') . ';';
} // END project_bg_style()

function related_projects( $projects = 0, $title = 'Related Projects' ) {
  if( !$projects ) return false;

  global $post;
  ?>
  <section class="related-projects">
    <h3><?php echo $title; ?></h3>
    <div class="related-project-thumbnails">
      <?php foreach ( $projects as $post ): setup_postdata($post); ?>      
        <div class="related-project">
          <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            <div class="related-project-hover antialiased">
              <h5 class="client"><?php the_field('client'); ?></h5>
              <h5 class="project"><?php the_field('project_name'); ?></h5>
            </div>
          </a>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div> <!-- .related-project-thumbnails -->
  </section>  
  <?php
} // END related_projects()


?>