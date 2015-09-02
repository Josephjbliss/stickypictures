<?php 
$group = array (
  'key' => 'group_55e622b0c5465',
  'title' => 'Projects Fields',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55e622d206885',
      'label' => 'Client',
      'name' => 'client',
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
    1 => 
    array (
      'key' => 'field_55e622d906886',
      'label' => 'Project Name',
      'name' => 'project_name',
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
      'key' => 'field_55e622e406887',
      'label' => 'Project Information',
      'name' => 'project_information',
      'type' => 'textarea',
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
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    3 => 
    array (
      'key' => 'field_55e7248b98201',
      'label' => 'Credits',
      'name' => 'credits',
      'type' => 'wysiwyg',
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
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 1,
    ),
    4 => 
    array (
      'key' => 'field_55e62358c80e0',
      'label' => 'Videos',
      'name' => 'videos',
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
      'button_label' => 'Add Video',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_55e623b8f1ea9',
          'label' => 'Video Thumbnail',
          'name' => 'thumb',
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
          'preview_size' => 'thumbnail',
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
          'key' => 'field_55e623a1f1ea8',
          'label' => 'Video URL',
          'name' => 'url',
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
      ),
    ),
    5 => 
    array (
      'key' => 'field_55e724a38ab2f',
      'label' => 'Stills',
      'name' => 'stills',
      'type' => 'gallery',
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
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    6 => 
    array (
      'key' => 'field_55e721625d18a',
      'label' => 'Related Projects',
      'name' => 'related_projects',
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
        0 => 'spcpt_name',
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
    7 => 
    array (
      'key' => 'field_55e72399710bd',
      'label' => 'Related Project Thumbnail',
      'name' => 'related_thumb',
      'type' => 'image',
      'instructions' => 'This is the thumbnail image that will show up if this project is in the "Related Projects" section. If no image is provided, the Featured Image will be used.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    8 => 
    array (
      'key' => 'field_55e7234223a5a',
      'label' => 'Background Color',
      'name' => 'bg_color',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#9d9fa2',
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
        'value' => 'sp_project',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => 
  array (
    0 => 'the_content',
    1 => 'excerpt',
    2 => 'custom_fields',
    3 => 'discussion',
    4 => 'comments',
    5 => 'revisions',
    6 => 'slug',
    7 => 'author',
    8 => 'format',
    9 => 'send-trackbacks',
  ),
  'active' => 1,
  'description' => '',
);