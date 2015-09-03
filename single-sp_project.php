<?php
get_header();
?>

<section class="project-hero">
    <div class="vimeo-iframe">
        <iframe src="https://player.vimeo.com/video/134346408?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

            <h4 class="credits-title">Credits</h4>
            
            <div class="credits">
                <div class="credit">
                    <h5>Network:</h5>
                    <p>USA Network</p>
                </div>

                <div class="credit">
                    <h5>Production Company:</h5>
                    <p>Sticky Pictures</p>
                </div>

                <div class="credit">
                    <h5>Creative Director:</h5>
                    <p>Michael Darmanin</p>
                </div>

                <div class="credit">
                    <h5>Producer:</h5>
                    <p>Michael Darmanin</p>
                </div>

                <div class="credit">
                    <h5>Design:</h5>
                    <p>I-Ting Lee</p>
                </div>

                <div class="credit">
                    <h5>Animation:</h5>
                    <p>Joe Vac</p>
                    <p>Ben Thing</p>
                </div>

                <div class="credit">
                    <h5>Design:</h5>
                    <p>I-Ting Lee</p>
                </div>

                <div class="credit">
                    <h5>Animation:</h5>
                    <p>Joe Vac</p>
                    <p>Ben Thing</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="videos">
    <h3>Videos</h3>
    <div class="video-thumbnails">
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/134346408?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/134334486?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>                    
        </div>
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/134348474?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/134665433?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/135912980?api=1" width="500" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>                
        <div class="video-thumb">
            <a href="#">
                <div class="video-thumb-hover"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
            </a>
            <div class="vimeo-iframe">
                <iframe src="https://player.vimeo.com/video/134983018?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php
$stills = get_field('stills');
if( $stills ) : ?>
  <section class="project-photos">
    <h3>Stills</h3>
    <div class="project-masonry">
      <?php foreach ( $stills as $still ): ?>      
        <div class="project-masonry-element">
          <img src="<?php echo $still['url']; ?>">
        </div>
      <?php endforeach; ?>
    </div> <!-- .project-masonry -->
  </section>
<?php endif; ?>

<?php
$related_projects = get_field('related_projects');
related_projects( $related_projects );
?>

<?php
get_footer();
?>