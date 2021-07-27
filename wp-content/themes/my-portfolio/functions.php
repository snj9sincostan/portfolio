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
    echo 'is-sticky';
  }
}

function register_nav() {
  register_nav_menus(
    array(
    'global-menu' => 'グローバルメニュー'
  ));
}

function init() {
  register_nav();
  add_action('wp_enqueue_scripts','not_load_default_jquery');
  add_action('wp_enqueue_scripts','read_assets');
}

init();

?>