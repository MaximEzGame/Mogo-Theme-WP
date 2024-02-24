<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="header_main_row">
        <h1 class="logo_wrap header_mod"><a href="#" class="logo_text header_mod">MoGo</a></h1>
      </div>
      <div class="menu_trigger_wrap">
        <div id="menu_trigger" class="menu_trigger"><span class="menu_trigger_decor"></span></div>
      </div>
      <?php
        wp_nav_menu( array(
          'menu'            => 'Main menu',
          'container'       => 'nav',
          'container_class' => 'header_menu_row',
          'container_id'    => '',
          'menu_class'      => 'header_menu_list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'depth'           => 0,
          'walker'          => '',
          'theme_location'  => 'top'
        ) );
      ?>
    </header>

    