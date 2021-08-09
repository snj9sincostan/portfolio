<?php

function not_load_default_jquery() {
  wp_deregister_script('jquery');
}

function read_assets() {
  wp_enqueue_script(
    'jquery',
    '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    array(),
    '3.5.1',
    true
  );
  wp_enqueue_script(
    'vivus',
    '//cdn.jsdelivr.net/npm/vivus@0.4.6/dist/vivus.min.js',
    array(),
    '0.4.6',
    true
  );
  wp_enqueue_script(
    'smooth-scroll',
    '//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js',
    array(),
    '15.0.0',
    true
  );
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri().'/assets/js/main.js',
    '',
    '',
    true
  );
  if (is_home()) {
    wp_enqueue_script(
      'initVivus.js',
      get_template_directory_uri().'/assets/js/initVivus.js',
      '',
      '',
      true
    );
  }
}

function append_style_if_not_home() {
  if (!is_home()) {
    echo 'is-fixed is-sticky';
  }
}

function register_nav() {
  register_nav_menus(
    array(
    'global-menu' => 'グローバルメニュー'
  ));
}

function sub_loop() {
  $args = array(
    'post_type' => 'portfolio',
    'post_per_page' => 3,
  );
  $the_query = new WP_Query($args);
  return $the_query;
}

function show_portfolio_image() {
  $image = get_field('portfolio-img');
  if($image){
    $url = $image['url'];
    $imageAlt = $image['alt'];
    $size = 'thumbnail';
    $imageThumb = $image['sizes'][ $size ];
    echo '<img src="'.$imageThumb.'" alt="'.$imageAlt.'">';
  }
}

function show_as_excerpt() {
  $portfolio_description = get_field('portfolio-description');
  $text = mb_substr($portfolio_description,0,50,'UTF-8');
  echo $text.'...';
}

function init() {
  register_nav();
  add_action('wp_enqueue_scripts','not_load_default_jquery');
  add_action('wp_enqueue_scripts','read_assets');
  add_theme_support('post-thumbnails');
}

init();

?>