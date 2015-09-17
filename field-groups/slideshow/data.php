<?php 
$group = array (
  'key' => 'group_55e865d2689e0',
  'title' => 'Slideshow',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55e7677ac4334',
      'label' => 'Slideshow',
      'name' => 'slides',
      'type' => 'relationship',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => 
      array (
        0 => 'sp_project',
      ),
      'taxonomy' => 
      array (
      ),
      'filters' => 
      array (
        0 => 'search',
      ),
      'elements' => '',
      'min' => '',
      'max' => '',
      'return_format' => 'object',
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
      1 => 
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'templates/tmpl-contact.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
);