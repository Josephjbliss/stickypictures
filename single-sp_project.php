<?php
get_header();
?>

<section class="project-hero">
    <div class="vimeo-iframe">
        <?php
        $videos = get_field('videos');
        $first_vid = 0;
        if( $videos )
            $first_vid = $videos[0];

        if( $first_vid ) : ?>
            <iframe src="https://player.vimeo.com/video/<?php echo $first_vid['vimeo_id'] ?>?api=1" width="<?php echo $first_vid['video_w'] ?>" height="<?php echo $first_vid['video_h'] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <?php
        elseif ( get_field('hero_image') ) :
          $image = get_field('hero_image');
        ?>
          <img src="<?php echo $image['url']; ?>">        
        <?php
        endif;
        ?>
    </div>
</section>
<section>
    <div class="project-blurb">
        <div class="project-blurb-col1">
            <h2 class="client"><?php the_field('client'); ?></h2>
            <h2 class="project"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_field('project_name'); ?></a></h2>
           
            <div class="blurb"><?php the_field('project_information'); ?></div>
        </div>

        <div class="project-blurb-col2">                
            <h4>Tags</h4>

            <div class="tags">
              <?php project_tags(); ?>
            </div>

            <?php project_credits(); ?>
        </div>
    </div>
</section>
<section class="videos">
    <?php project_videos(); ?>
</section>

<?php if( have_rows('sections') ): ?>
    <?php while( have_rows('sections') ): the_row(); ?>
      <section class="project-photos">        
        <h3><?php the_sub_field('title'); ?></h3>
        <div class="project-masonry">        
          <?php 
          $images = get_sub_field('images'); 
          foreach ( $images as $image ): ?>      
            <div class="project-masonry-element">
              <img src="<?php echo $image['url']; ?>">
            </div>
          <?php endforeach; ?>
        </div> <!-- .project-masonry -->
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$related_projects = get_field('related_projects');
related_projects( $related_projects );
?>

<?php
get_footer();
?>