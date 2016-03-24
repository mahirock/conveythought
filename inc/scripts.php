<?php
/*
 * this is style & script.
 *
 * @package conveythought
 */
/*--------------------------------------------------------------
  js + css
--------------------------------------------------------------*/
function conveythought_scripts() {
    //css
    wp_enqueue_style( 'conveythought-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', true );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css', true );
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/js/flexslider/flexslider.css', true );
    wp_enqueue_style( 'common', get_template_directory_uri() . '/css/common.css', true );
    //js
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery1-10-2', get_template_directory_uri() . '/js/jquery1-10-2.js', array(), '1.10.2', true );
    wp_enqueue_script( 'jquery.easing.1.3.js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3', true );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '',  true );
    wp_enqueue_script( 'footerFixed', get_template_directory_uri() . '/js/footerFixed.js', array(), '',  true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js', array(), '',  true );
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider/jquery.flexslider-min.js', array(), '',  true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '',  true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'conveythought_scripts' );


/*--------------------------------------------------------------
  post display css
--------------------------------------------------------------*/
function conveythought_add_editor_styles() {
    add_editor_style( '/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'conveythought_add_editor_styles' );
