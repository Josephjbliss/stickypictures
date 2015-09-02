<?php

function project_cpt_name() {
  return THEME_PREFIX . '_project';
} // END project_cpt_name()

function project_tags() {
  global $post;
  the_tags( $before = '', $sep = ' ', $after = '');
} // END project_tags()

function project_bg_style() {
  global $post;
  echo 'background-color: ' . get_field('bg_color') . ';';
} // END project_bg_style()

?>