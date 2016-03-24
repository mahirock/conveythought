<?php
/*
 * this is Initial setting
 *
 * @package conveythought
 */

/*--------------------------------------------------------------
  feed
--------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*--------------------------------------------------------------
  thumbnail
--------------------------------------------------------------*/
function conveythought_thumbnail_size() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'list-thumbnail', 150, 150, true );
}
add_action( 'after_setup_theme', 'conveythought_thumbnail_size' );


/*--------------------------------------------------------------
  menu
--------------------------------------------------------------*/
register_nav_menus( array(
	'headernav' => esc_attr(__( 'HEADER MENU', 'conveythought')),
) );


/*--------------------------------------------------------------
  excerpt_length
--------------------------------------------------------------*/
function conveythought_excerpt_length($length) {
     return 150;
}
add_filter('excerpt_length', 'conveythought_excerpt_length');

function conveythought_excerpt_more($post) {
    return esc_attr(__('...more', 'conveythought'));
}
add_filter('excerpt_more', 'conveythought_excerpt_more');


/*--------------------------------------------------------------
  translation
--------------------------------------------------------------*/
load_theme_textdomain( 'conveythought', get_template_directory() . '/languages' );


/*--------------------------------------------------------------
  html5
--------------------------------------------------------------*/
add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


/*--------------------------------------------------------------
  images
--------------------------------------------------------------*/
function my_add_title_attr_image($html, $id, $caption, $title, $align, $url, $size, $alt ){

$attr = 'title="'.$alt.'"';
return str_replace( '<img', '<img '.$attr, $html );

}
add_filter('image_send_to_editor','my_add_title_attr_image',10,8);


/*--------------------------------------------------------------
  date set
--------------------------------------------------------------*/
function conveythought_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'conveythought_the_post' );
