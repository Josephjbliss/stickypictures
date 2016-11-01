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
                <?php the_field('contact_page_column_1', 'options'); ?>
            </div>
            
            <div class="contact-info-content">
                <?php the_field('contact_page_column_2', 'options'); ?>
            </div>

            <div class="contact-info-content">
                <?php the_field('contact_page_column_3', 'options'); ?>
            </div>

            <div class="contact-info-content">
              <?php the_field('contact_page_column_4', 'options'); ?>
            </div>
        </section>

      </section>
    </section>

<?php
  endwhile;
endif;

get_footer();
?>