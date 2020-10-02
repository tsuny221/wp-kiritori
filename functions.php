<?php
function my_scripts() {
  //css
  wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/css/vendors/bootstrap-reboot.css', array(), '1.0.2', 'all' );
  wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.1', 'all' );
  wp_enqueue_style( 'typekit', 'https://use.typekit.net/mar0rtq.css', array(), '1.0.1', 'all' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.4', 'all' );

  //javascript
  wp_enqueue_script( 'inview-animation', get_template_directory_uri() . '/js/libs/inview-animation.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/libs/slider.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/libs/mobile-menu.js', array( 'jquery' ), '1.0.4', true );
  wp_enqueue_script( 'scroll-animation', get_template_directory_uri() . '/js/libs/scroll-animation.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'text-animation', get_template_directory_uri() . '/js/libs/text-animation.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'cut-animation', get_template_directory_uri() . '/js/libs/cut-animation.js', array( 'jquery' ), '1.0.3', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.4', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>
