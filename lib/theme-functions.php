<?php

function project_cpt_name() {
  return THEME_PREFIX . '_project';
} // END project_cpt_name()

function project_tags() {
  global $post;
  // the_tags( $before = '', $sep = ' ', $after = '');

  $work_page = get_post_type_archive_link( project_cpt_name() );
  $tags = wp_get_post_tags( $post->ID );
  $html = '';
  foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
        
    $html .= "<a href='{$work_page}#{$tag->slug}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
  }
  echo $html;  

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
            <?php $related_thumb = get_field('related_thumb');?>
            <?php if ( !empty( $related_thumb ) ) : ?>
              <img src="<?php echo $related_thumb['url']; ?>" alt="View <?php the_title(); ?> Project Page">
            <?php elseif( has_post_thumbnail() ):
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
            ?>
              <img src="<?php echo $thumb[0]; ?>" alt="View <?php the_title(); ?> Project Page">
            <?php else:?>
              <img src="http://placehold.it/350x197?text=Project Image" alt="View <?php the_title(); ?> Project Page">
            <?php endif; ?>
            <div class="related-project-hover antialiased" style="<?php project_bg_style(); ?>">
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


function project_credits() {
  global $post;

  $credits = get_field('credits');

  if( $credits ) :
  ?>
  <h4 class="credits-title">Credits</h4>
  <div class="credits">
    <?php foreach ( $credits as $group ) : ?>
      <div class="credit">
          <h5><?php echo $group['credit_category']; ?>:</h5>
          <?php echo $group['credit_names']; ?>
      </div>
    <?php
    endforeach; ?>
  </div>
  <?php  
  endif;
} // END project_credits()


function project_videos() {
  global $post;

  $videos = get_field('videos');

  if( !$videos ) return false;

  // Only remove first video if there's exactly 1 video
  // Otherwise that first vid should print in the thumbs section
  if( count( $videos ) == 1 )
    array_shift( $videos );

  if( !empty( $videos ) ) :
  ?>
    <h3 class="videos-title">videos</h3>
    <div class="video-thumbnails">
      <?php foreach ( $videos as $video ) : ?>
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php echo $video['thumb']['url'] ?>">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/<?php echo $video['vimeo_id'] ?>?api=1" width="<?php echo $video['video_w'] ?>" height="<?php echo $video['video_h'] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
      <?php
      endforeach; ?>
    </div>
  <?php  
  endif;
} // END project_videos()


function footer_social_links() {

  $links = get_field('footer_social_links', 'options');

  if( $links ) :
  ?>
  <div class="social">
    <?php foreach ( $links as $link ) : ?>
        <a href="<?php echo $link['link_url']; ?>" target="_blank"><img src="<?php echo $link['icon']; ?>" alt="Social Link"></a>
    <?php
    endforeach; ?>
  </div>
  <?php  
  endif;
} // END footer_social_links()


function infinite_projects( $query ) {
    if( is_post_type_archive( project_cpt_name() ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'infinite_projects' );


// add_filter( 'the_password_form', 'sticky_password_form' );
function sticky_password_form() {
  global $post;
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
  $o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
  ' . __( "This is password protected content. To view it please enter your password below" ) . '
  <label class="pass-label" for="' . $label . '">' . __( "Password" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" class="button" value="' . esc_attr__( "Submit" ) . '" />
  </form>
  ';
  return $o;
}

function lazy_image( $src=0, $w=0, $h=0, $echo = true ) {
  if( !$src || !$w || !$h ) return false;

  ob_start();
  ?>
    <img class="lazy" data-original="<?php echo $src; ?>" width="<?php echo $w; ?>" height="<?php echo $h; ?>">
    <!-- <img class="lazyxt" data-src="<?php echo $src; ?>" data-effect="fadeIn" width="<?php echo $w; ?>" height="<?php echo $h; ?>"> -->
  <?php
  $img = ob_get_clean();

  if( $echo )
    echo $img;

  return $img;

} // END lazy_image()


?>