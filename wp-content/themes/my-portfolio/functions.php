<?php
function read_assets() {
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
register_nav();
add_action('wp_enqueue_scripts','read_assets');

?>