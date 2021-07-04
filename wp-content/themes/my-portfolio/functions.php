<?php
function readAssets() {
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


function registerNav() {
  register_nav_menus(
    array(
    'global-menu' => 'グローバルメニュー'
  ));
}
registerNav();
add_action('wp_enqueue_scripts','readAssets');

?>