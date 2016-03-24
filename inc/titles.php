<?php
/*
 * this is titles
 *
 * @package conveythought
 */


/*--------------------------------------------------------------
  titletag
--------------------------------------------------------------*/
add_theme_support( 'title-tag' );


/*--------------------------------------------------------------
  titletag v
--------------------------------------------------------------*/
if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
}
