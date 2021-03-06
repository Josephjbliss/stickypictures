<?php 
$group = array (
  'key' => 'group_55f8561a5baf6',
  'title' => 'Slideshow (Generic)',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55f85695ea9db',
      'label' => 'Slides',
      'name' => 'slides_repeater',
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
      'layout' => 'block',
      'button_label' => 'Add Slide',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_55f856a5ea9dc',
          'label' => 'Image',
          'name' => 'image',
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
          'return_format' => 'array',
          'preview_size' => 'sow-carousel-default',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        1 => 
        array (
          'key' => 'field_55f856bcea9dd',
          'label' => 'Caption',
          'name' => 'caption',
          'type' => 'text',
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
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        2 => 
        array (
          'key' => 'field_55f856c1ea9de',
          'label' => 'Link (Optional)',
          'name' => 'link',
          'type' => 'post_object',
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
          ),
          'taxonomy' => 
          array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'return_format' => 'object',
          'ui' => 1,
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
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
      1 => 
      array (
        'param' => 'page_type',
        'operator' => '!=',
        'value' => 'front_page',
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