<?php
/*
Template Name: Contact
*/
get_header();
if ( have_posts() ) :
  while (have_posts()) : the_post(); ?>

    <section class="page-section">
      <section class="page-content">
        <?php the_content(); ?>

        <section class="contact-info">
            <div class="contact-info-content">
                <h3>Sticky Pictures</h3>
            </div>
            
            <div class="contact-info-content">
                <?php the_field('address','options'); ?>
                <p><?php the_field('tel','options'); ?></p>
            </div>

            <div class="contact-info-content">
              <p>New Business Inquiries:<br>
                  <a href="mailto:<?php the_field('new_business_email','options'); ?>"><?php the_field('new_business_email','options'); ?></a>
              </p>

              <p>General inquiries please email:<br>
                  <a href="mailto:<?php the_field('general_inquiries_email','options'); ?>"><?php the_field('general_inquiries_email','options'); ?></a>
              </p>
            </div>

            <div class="contact-info-content">
              <p>We are always looking for talented individuals.</p>

              <p>Please send portfolios to:<br>
                  <a href="mailto:<?php the_field('portfolios_email','options'); ?>"><?php the_field('portfolios_email','options'); ?></a>
              </p>
            </div>
        </section>

      </section>
    </section>

<?php
  endwhile;
endif;

get_footer();
?>