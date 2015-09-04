<?php 
$group = array (
  'key' => 'group_55e9e28dbcd9b',
  'title' => 'Sticky Pictures Site Options',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55e9e2b2ae1c8',
      'label' => 'Footer Social Links',
      'name' => 'footer_social_links',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'table',
      'button_label' => 'Add Social LInk',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_55e9e2c3ae1c9',
          'label' => 'Link URL',
          'name' => 'link_url',
          'type' => 'url',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => 
          array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
        1 => 
        array (
          'key' => 'field_55e9e2e3ae1ca',
          'label' => 'Icon',
          'name' => 'icon',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => 
          array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'url',
          'preview_size' => 'full',
          'library' => 'all',
          'min_width' => 50,
          'min_height' => 50,
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
      ),
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'site-options',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
);