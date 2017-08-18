<?php
add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn(){
  if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery');
  }
}

add_action('wp_enqueue_scripts', 'jasonpelt_enqueue_scripts', 100);
function jasonpelt_enqueue_scripts(){
  wp_register_script(
    'bootstrap-script', 
    '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 
    array('jquery'), 
    '', 
    true
  );
  //wp_register_script(
  //  'jasonpelt-scripts',
  //  get_template_directory_uri() . '/js/jasonpelt-scripts.js',
  //  array('jquery'),
  //  '',
  //  true
  //);
  
  wp_enqueue_script('bootstrap-script');
  //wp_enqueue_script('jasonpelt-scripts');
}

add_action('wp_enqueue_scripts', 'jasonpelt_add_styles');
function jasonpelt_add_styles(){
  wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_register_style('jasonpelt', get_template_directory_uri() . '/style.css');

  wp_enqueue_style('bootstrap-css');
  wp_enqueue_style('jasonpelt');  
}

add_action('init', 'create_post_type');
function create_post_type(){
  $args = array(
    'label' => __('Events'),
    'singular_name' => __('Event'),
    'capability_type' => 'post',
    'menu_name' => ('Events'),
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'custom-fields')
  );
  register_post_type('events', $args);
}