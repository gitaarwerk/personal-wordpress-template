<?php 

add_theme_support('post-thumbnails'); 

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Header Menu' ),
      'footer-social-menu' => __( 'Social' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

