<?php
/*
Template Name: Capabilities
*/
get_header();

get_template_part('templates/slider'); ?>

<section class="capabilities-blurb">
  <?php the_field('intro_blurb'); ?>
</section>

<div class="rule capabilities-blurb"></div>

<section class="team-members">

    <div class="team-members-blurb">
      <?php the_field('team_members_blurb'); ?>
    </div>
    <?php
    if ( get_field('team') ) {
      while ( has_sub_field('team') ) : ?>
        <div class="team-member">
            <?php if ( get_sub_field('headshot') ): ?>
              <img src="<?php the_sub_field('headshot'); ?>">
            <?php endif; ?>
            <h4><?php the_sub_field('name'); ?></h4>
            <h4><?php the_sub_field('title'); ?></h4>

            <div class="biography">
                <?php the_sub_field('bio');  ?>
            </div>
            <h5 class="bio-toggle">Biography</h5>
        </div>
      <?php
      endwhile;
    }
    ?>

</section>

<div class="rule team-members"></div>

<section class="the-studio">
  <?php the_field('the_studio'); ?>
<!--     <div class="the-studio-blurb1">
        <h3>The Studio.</h3>

        <p>Here's a few of the brands we've enjoyed working with so far. More text on second line.</p> 

        <p>Collaboration text goes here how we work with our clientpps. More text on next line.</p>
    </div>
    
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/studiopic1.png" class="the-studio-pic1">

    <div class="the-studio-blurb-2">
        <p>The studio is a critical part of the design equation but it rarely gets its due. It's the unsung hero. The fifth Beatle. To do great work we need a great studio: a comfortable space with proper meeting areas, all the right tools to experiment with, space to shoot, a great library of books / magazines / music / movies, and an open plan to facilitate collaboration on projects. Not to mention great people to work with, some good snacks and lots of light.</p>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/studiopic2.png" class="the-studio-pic2">
 --></section>


<?php
$case_studies = get_field('case_studies');
related_projects( $case_studies, $title = 'Relevant Case Studies' );
?>
<?php
get_footer();
?>