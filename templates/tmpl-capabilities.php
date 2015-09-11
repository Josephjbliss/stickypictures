<?php
/*
Template Name: Capabilities
*/
get_header();

get_template_part('templates/slider'); ?>

<section class="capabilities-blurb capabilties-section">
  <?php the_field('intro_blurb'); ?>
</section>

<div class="rule capabilities-blurb"></div>

<section class="team-members capabilties-section">

    <div class="team-members-blurb">
      <?php the_field('team_members_blurb'); ?>
    </div>
    <?php
    if ( get_field('team') ) { ?>
    <div class="team-member-headshots">
    <?php
      while ( has_sub_field('team') ) : ?>
        <div class="team-member">
            <?php if ( get_sub_field('headshot') ): ?>
              <img src="<?php the_sub_field('headshot'); ?>">
            <?php endif; ?>
            <h4 class="name"><?php the_sub_field('name'); ?></h4>
            <h4 class="title"><?php the_sub_field('title'); ?></h4>

            <div class="biography">
                <?php the_sub_field('bio');  ?>
            </div>
            <h5 class="bio-toggle">Biography</h5>
        </div>
      <?php
      endwhile;?>
      </div>
      <?php
    }
    ?>

</section>

<div class="rule team-members"></div>

<section class="the-studio capabilties-section">
    <div class="the-studio-blurb1">
        <?php the_field('studio_blurb_1'); ?>
    </div>
    
    <img src="<?php the_field('studio_image_1'); ?>" class="the-studio-pic1">

    <div class="the-studio-blurb2">
        <?php the_field('studio_blurb_2'); ?>
    </div>

    <img src="<?php the_field('studio_image_2'); ?>" class="the-studio-pic2">
</section>

<div class="rule the-studio"></div>

<?php
$case_studies = get_field('case_studies');
related_projects( $case_studies, $title = 'Relevant Case Studies' );
?>
<?php
get_footer();
?>