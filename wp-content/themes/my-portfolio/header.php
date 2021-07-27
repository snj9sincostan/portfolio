<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shinji Nishihara | ポートフォリオ</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <?php wp_head(); ?>
</head>
<body>
  <header class="l-header <?php append_style_if_not_home();?>">
    <div class="l-header__inner">
      <h1 class="l-header__logo">
        <a href="<?php echo home_url(); ?>">
          <svg><use xlink:href="<?php echo get_template_directory_uri();?>/assets/images/animated/splice.svg#logo"/></svg>
        </a>
      </h1>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'global-menu',
          'container' => 'nav',
          'container_class' => 'l-header__nav',
          'menu_class' => 'l-header__list',
          'depth' => 1
        ));
      ;?>
      <div class="l-header__burger">
        <span class="l-header__burgerLine"></span>
        <span class="l-header__burgerLine"></span>
        <span class="l-header__burgerLine"></span>
      </div>
    </div>
  </header>