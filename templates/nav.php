<!--[if lt IE 9]>
  <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
  </div>
<![endif]-->

<header class="" role="banner">
  <h1><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
  <nav role="navigation">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(
        array(
          'theme_location' => 'primary_navigation',
          'walker'         => new Bolt_Nav_Walker(),
          'menu_class'     => 'nav navbar-nav',
          'items_wrap'     => '%3$s'
          )
        );
    endif;
    ?>
    <?php
    if( is_post_type_archive( project_cpt_name() ) ) : ?>
    <a href="#" class="tags-toggle-btn pull-right">Tags</a>
    <?php endif; ?>
  </nav>
</header>