<?php


/**
 * Shorthand for custom post type query
 * 
 * Accepts the following params:
 * Custom Post Type - (string) $cptName
 * Limit for number of posts - (int) $posts_per_page
 * [Optional] Array of args used in WP_Query
 */
if( !function_exists( 'cpt_query' ) ) {
  function cpt_query($cptName, $posts_per_page=-1, $args=NULL) {
    $defaults = array(
      'post_type' => $cptName,
      'posts_per_page' => $posts_per_page
    );
    $args = wp_parse_args($args, $defaults);
    
    $cptQuery = new WP_Query($args);

    return $cptQuery;
  }
}

// ACF Helper functions
function print_field( $field_name=0, $args = null ) {

  if( !$field_name ) return false;

  $defaults = array(
    'wrap_el' => 'div',
    'classes' => array('acf-field', str_replace( '_', '-', $field_name ) ),
    'before' => '',
    'after' => ''
  );
      
  $args = wp_parse_args( $args, $defaults );
  
  extract( $args, EXTR_SKIP );

  if ( get_field( $field_name ) ) :
    echo "<{$wrap_el} class='" . implode(' ', $classes ) . "'>" .
            $before . get_field( $field_name ) . $after .
          "</{$wrap_el}>";
  endif;

} // end print_field()



function print_sub_field( $field_name=0, $args = null ) {

  if( !$field_name ) return false;

  $defaults = array(
    'wrap_el' => 'div',
    'classes' => array('acf-field', str_replace( '_', '-', $field_name ) ),
    'before' => '',
    'after' => ''
  );
      
  $args = wp_parse_args( $args, $defaults );
  
  extract( $args, EXTR_SKIP );

  if ( get_sub_field( $field_name ) ) :
    echo "<{$wrap_el} class='" . implode(' ', $classes ) . "'>" .
            $before . get_sub_field( $field_name ) . $after .
          "</{$wrap_el}>";
  endif;

} // end print_field()


// Shorthand to get image url with stylesheet_directory prepended
function theme_image($image_name) {
  return get_bloginfo('stylesheet_directory') . "/assets/images/$image_name";
}


function get_child_categories( $parent_cat_id = 0 ) {
  if( !$parent_cat_id ) return false;

  $args = array(
    'parent' => $parent_cat_id
     // 'post_type' => 'twc_case_studies'
  );

  $child_cats = get_categories( $args );
  return $child_cats;

} // END get_child_categories() 


/*
 * Return or echo post permalink by title
 */
function permalink_by_title($title, $echo=true) {
  
  $id = get_page_by_title( $title );
  
  $link = get_permalink( $id );
  
  if (!$echo)
    return $link;
    
  echo $link;
}


// Replace last occurence of a string within string
function str_lreplace($search, $replace, $subject)
{
    $pos = strrpos($subject, $search);

    if($pos !== false)
    {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }

    return $subject;
}


/**
 * Return bootstrap 3 columns by specifying column width
 * ( Based on 12 column Grid )
 */
function bootstrap_col( $col = 0, $col_sm = 0, $col_xs = 0 ) {
  if( !$col ) return false;

  if( !$col_sm )
    $col_sm = $col;

  if( !$col_xs )
    $col_xs = 12;

  return "col-md-$col col-sm-$col_sm col-xs-$col_xs";

} // END bootstrap_col()


function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

/**
 * Add page slug to body_class() classes if it doesn't exist
 */
function roots_body_class($classes) {
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
  return $classes;
}
add_filter('body_class', 'roots_body_class');



/**
 * Returns / Echoes an inline CSS 'background' declaration
 * Specify the image, bg position, thumbnail size, and CSS 'background-size' style
 */
function bg_image( $args = array(), $echo = true ) {

  $defaults = array(
    'image' => 0,
    'bg_pos' => "no-repeat top left",
    'thumb_size' => "medium",
    'bg_size' => "cover",
  );

  $args = array_merge( $defaults, $args );

  extract( $args );

  $url = "";

  $image_or_acf_key = $image;

  if( $image_or_acf_key ) {

    if ( gettype( $image_or_acf_key ) == 'string') {
      // the function has been passed an ACF field name
      $imageObj = get_field( $image_or_acf_key );
      $url = $imageObj['sizes'][ $thumb_size ];
    } elseif ( isset( $image_or_acf_key['sizes'][ $thumb_size ] ) ){
      // the function has been passed an image object
      $url = $image_or_acf_key['sizes'][ $thumb_size ];
    } else {
      //the function has been passed an attachment source obj
      $url = $image_or_acf_key[0];
    }
  } else {
    global $post;
    
    if ( !has_post_thumbnail() ) return false;
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $thumb_size, true);
    $url = $image_url[0];
  }

  $r = "background: url('$url') $bg_pos;background-size: $bg_size;";

  if ($echo)
    echo $r;

  return $r;
  
} // end bg_image



?>