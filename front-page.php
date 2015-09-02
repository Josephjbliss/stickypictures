<?php
get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    ?>
        <section class="slideshow">
            <div class="dots">
                <span class="dot current"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
            </div>
            <div class="slides">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase1.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase2.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase3.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase4.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase5.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase6.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase7.png">
                <img src="<?php bloginfo('template_url'); ?>/img/showcase/showcase8.png">
            </div>
            <div class="caption antialiased">
                <h2 class="current"><span class="client">Wars.</span> <a href="project.html" class="project">Vegas</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 2</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 3</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 4</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 5</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 6</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 7</a></h2>
                <h2><span class="client">Wars.</span> <a href="project.html" class="project">Vegas 8</a></h2>
            </div>
        </section>
        <section class="masonry">
            <div class="masonry-stamp home-blurb">
                <p class="home-blurb-1">Sticky Pictures is a design driven animation and branding studio.</p>

                <p class="home-blurb-2">We teamed back up with our friends at Capstrat to create a whole new set of films for Blue Cross and Blue Shield of North Carolina. This time we added a cast of characters to our graphic palette.</p>
            </div>
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample1.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample2.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample3.png">
                <div class="home-project-text antialiased" style="background-color: #a2bdd4;">
                    <h3 class="client">Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>    
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample4.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div> 
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample5.png">
                <div class="home-project-text antialiased" style="background-color: #21A4A8;">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div> 
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample1.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample2.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample3.png">
                <div class="home-project-text antialiased" style="background-color: #a2bdd4;">
                    <h3 class="client">Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>    
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample4.png">
                <div class="home-project-text antialiased">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div> 
            <div class="masonry-element home-project">
                <img src="<?php bloginfo('template_url'); ?>/img/homesample5.png">
                <div class="home-project-text antialiased" style="background-color: #21A4A8;">
                    <h3 class="client">Thornberg &amp; Forester</h3>
                    <h3 class="project"><a href="project.html">Retirementp</a></h3>
                    <div class="tags"><a href="#">Motion Graphics</a><a href="#">3d</a><a href="#">2d animation</a></div>
                </div>
            </div>
        </section>

    <?php
  }
}
get_footer();

?>