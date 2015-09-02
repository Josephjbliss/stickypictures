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
              <?php the_tags( $before = '', $sep = ' ', $after = ''); ?>
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
<section class="project-photos">
    <h3>Stills</h3>
    <div class="project-masonry">
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample1.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample2.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample3.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample4.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample5.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample1.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample2.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample3.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample4.png">
        </div>
        <div class="project-masonry-element">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/homesample5.png">
        </div>
    </div>
</section>
<section class="related-projects">
    <h3>Related Projects</h3>
    <div class="related-project-thumbnails">
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
        <div class="related-project">
            <a href="project.html">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/project/video-thumb.png">
                <div class="related-project-hover antialiased">
                    <h5 class="client">Thornberg &amp; Forester</h5>
                    <h5 class="project">Retirement</h5>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
?>