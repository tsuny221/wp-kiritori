<?php
function my_scripts() {
  //css
  wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/css/vendors/bootstrap-reboot.css', array(), '1.0.4', 'all' );
  wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.3', 'all' );
  wp_enqueue_style( 'typekit', 'https://use.typekit.net/mar0rtq.css', array(), '1.0.1', 'all' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.7', 'all' );

  //javascript
   wp_enqueue_script('slick.min',get_stylesheet_directory_uri().'/slick/slick.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'inview-animation', get_template_directory_uri() . '/js/libs/inview-animation.js', array( 'jquery' ), '1.1.0', true );
  wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/libs/slider.js', array( 'jquery' ), '1.1.1', true );
  wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/libs/mobile-menu.js', array( 'jquery' ), '1.1.0', true );
  wp_enqueue_script( 'scroll-animation', get_template_directory_uri() . '/js/libs/scroll-animation.js', array( 'jquery' ), '1.1.0', true );
  wp_enqueue_script( 'text-animation', get_template_directory_uri() . '/js/libs/text-animation.js', array( 'jquery' ), '1.1.0', true );
  wp_enqueue_script( 'cut-animation', get_template_directory_uri() . '/js/libs/cut-animation.js', array( 'jquery' ), '1.1.0', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support( 'post-thumbnails' );//アイキャッチ画像をON
add_theme_support( 'menus');//メニュー機能をON


//wordpressの更新を可能にする
function set_fs_method($args) {
	return 'direct';
}
add_filter('filesystem_method','set_fs_method');

function get_thumb_img($size = 'full') {

  $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得

  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得

  $thumb_src = $thumb_img[0];    // 画像のurlだけ取得

  $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

  return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'">';
}
?>
