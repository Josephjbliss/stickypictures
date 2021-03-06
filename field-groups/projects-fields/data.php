<?php 
$group = array (
  'key' => 'group_55e622b0c5465',
  'title' => 'Projects Fields',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55e9e7fa55005',
      'label' => 'General Info',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    1 => 
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
    2 => 
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
    3 => 
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
      'new_lines' => 'br',
    ),
    4 => 
    array (
      'key' => 'field_55fb280d544df',
      'label' => 'Hero Image',
      'name' => 'hero_image',
      'type' => 'image',
      'instructions' => 'If no video is present, this image will show as a featured banner.',
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
    5 => 
    array (
      'key' => 'field_5e161cbdb823b',
      'label' => 'Hero Video',
      'name' => 'hero_video',
      'type' => 'repeater',
      'instructions' => 'This video be auto-played as the main video for this project.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 0,
      'max' => 1,
      'layout' => 'table',
      'button_label' => 'Add Video',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_5e161cbdb823c',
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
          'key' => 'field_5e161cbdb823d',
          'label' => 'Vimeo ID',
          'name' => 'vimeo_id',
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
        ),
        2 => 
        array (
          'key' => 'field_5e161cbdb823e',
          'label' => 'Video Width',
          'name' => 'video_w',
          'type' => 'number',
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
          'min' => '',
          'max' => '',
          'step' => '',
        ),
        3 => 
        array (
          'key' => 'field_5e161cbdb823f',
          'label' => 'Video Height',
          'name' => 'video_h',
          'type' => 'number',
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
          'min' => '',
          'max' => '',
          'step' => '',
        ),
      ),
    ),
    6 => 
    array (
      'key' => 'field_55e9f06cfc2cc',
      'label' => 'Showcase Image',
      'name' => 'showcase_image',
      'type' => 'image',
      'instructions' => 'This is the image that will show up on the homepage slideshow.',
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
    9 => 
    array (
      'key' => 'field_55e9e85fb3dc7',
      'label' => 'Credits',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    10 => 
    array (
      'key' => 'field_55e7248b98201',
      'label' => 'Credits',
      'name' => 'credits',
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
      'min' => 0,
      'max' => 0,
      'layout' => 'table',
      'button_label' => 'Add Credit Category',
      'collapsed' => '',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_55e9c367b38dc',
          'label' => 'Credit Category',
          'name' => 'credit_category',
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
          'key' => 'field_55e9c38bb38dd',
          'label' => 'Credit Names',
          'name' => 'credit_names',
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
          'rows' => 2,
          'new_lines' => 'wpautop',
          'readonly' => 0,
          'disabled' => 0,
        ),
      ),
    ),
    11 => 
    array (
      'key' => 'field_55e9e80c55006',
      'label' => 'Videos',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    12 => 
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
      'collapsed' => '',
      'min' => 0,
      'max' => 0,
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
          'label' => 'Vimeo ID',
          'name' => 'vimeo_id',
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
          'key' => 'field_55e9c30fc09df',
          'label' => 'Video Width',
          'name' => 'video_w',
          'type' => 'number',
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
          'min' => '',
          'max' => '',
          'step' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        3 => 
        array (
          'key' => 'field_55e9c2f1c09de',
          'label' => 'Video Height',
          'name' => 'video_h',
          'type' => 'number',
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
          'min' => '',
          'max' => '',
          'step' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
      ),
    ),
    13 => 
    array (
      'key' => 'field_55fb059ada588',
      'label' => 'Sections',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    14 => 
    array (
      'key' => 'field_55fb05a6da589',
      'label' => 'Sections',
      'name' => 'sections',
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
      'min' => 0,
      'max' => 0,
      'layout' => 'block',
      'button_label' => 'Add Section',
      'collapsed' => '',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_55fb05aeda58a',
          'label' => 'Title',
          'name' => 'title',
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
          'key' => 'field_5e161da686aa7',
          'label' => 'Use New Media Items?',
          'name' => 'use_new_media',
          'type' => 'true_false',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => 
          array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
          'ui' => 0,
          'ui_on_text' => '',
          'ui_off_text' => '',
        ),
        2 => 
        array (
          'key' => 'field_5e158230cbd69',
          'label' => 'Media',
          'name' => 'media',
          'type' => 'flexible_content',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => 
          array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'layouts' => 
          array (
            'layout_5e15824f6749f' => 
            array (
              'key' => 'layout_5e15824f6749f',
              'name' => 'image',
              'label' => 'Image',
              'display' => 'table',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_5e15826bcbd6a',
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
                  'preview_size' => 'medium',
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
                  'key' => 'field_5e161b77b8238',
                  'label' => 'Full Width (1up)',
                  'name' => 'full_width',
                  'type' => 'true_false',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '10',
                    'class' => '',
                    'id' => '',
                  ),
                  'message' => '',
                  'default_value' => 0,
                  'ui' => 0,
                  'ui_on_text' => '',
                  'ui_off_text' => '',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
            'layout_5e158276cbd6b' => 
            array (
              'key' => 'layout_5e158276cbd6b',
              'name' => 'video',
              'label' => 'Video',
              'display' => 'table',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_5e15827ecbd6c',
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
                  'preview_size' => 'medium',
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
                  'key' => 'field_5e158292cbd6d',
                  'label' => 'Vimeo ID',
                  'name' => 'vimeo_id',
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
                ),
                2 => 
                array (
                  'key' => 'field_5e15829ccbd6e',
                  'label' => 'Video Width',
                  'name' => 'video_w',
                  'type' => 'number',
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
                  'min' => '',
                  'max' => '',
                  'step' => '',
                ),
                3 => 
                array (
                  'key' => 'field_5e1582a1cbd6f',
                  'label' => 'Video Height',
                  'name' => 'video_h',
                  'type' => 'number',
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
                  'min' => '',
                  'max' => '',
                  'step' => '',
                ),
                4 => 
                array (
                  'key' => 'field_5e161b9ab8239',
                  'label' => 'Full Width (1up)',
                  'name' => 'full_width',
                  'type' => 'true_false',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '10',
                    'class' => '',
                    'id' => '',
                  ),
                  'message' => '',
                  'default_value' => 0,
                  'ui' => 0,
                  'ui_on_text' => '',
                  'ui_off_text' => '',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
          ),
          'button_label' => 'Add Media',
          'min' => '',
          'max' => '',
        ),
        3 => 
        array (
          'key' => 'field_55fb05b2da58b',
          'label' => 'Images',
          'name' => 'images',
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
          'insert' => 'append',
          'return_format' => 'array',
        ),
      ),
    ),
    15 => 
    array (
      'key' => 'field_55e9e83555008',
      'label' => 'Related Projects',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    16 => 
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
        'value' => 'sp_project',
      ),
    ),
  ),
  'menu_order' => 2,
  'position' => 'acf_after_title',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => 
  array (
    0 => 'the_content',
    1 => 'excerpt',
    2 => 'discussion',
    3 => 'comments',
    4 => 'revisions',
    5 => 'slug',
    6 => 'author',
    7 => 'format',
    8 => 'send-trackbacks',
  ),
  'active' => true,
  'description' => '',
  '_valid' => 1,
);