<?php
/*
 * this is widgets
 *
 * @package conveythought
 */

/*--------------------------------------------------------------
  widgets
--------------------------------------------------------------*/
function conveythought_widgets_init() {
 register_sidebar(array(
	'name' => 'sidebar1',
	'id' => 'sidebar1',
	'description' => 'widgets area1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ));

 register_sidebar(array(
	'name' => 'sidebar2',
	'id' => 'sidebar2',
	'description' => 'widgets area2',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ));

//Footer
 register_sidebar(array(
	'name' => 'Footer',
	'id' => 'sidebar3',
	'description' => 'footer area',
	'before_widget' => '<aside id="%1$s" class="footer-widget widget %2$s col-md-4 col-sm-6 col-xs-12">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="footer-widget-title">',
	'after_title'   => '</h2>',
 ));
}
add_action( 'widgets_init', 'conveythought_widgets_init' );
