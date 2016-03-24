<?php
/*
 * this is functions.
 *
 * @package conveythought
 */

if ( ! isset( $content_width ) ) {
  $content_width = 640;
}

load_theme_textdomain('conveythought');

require_once locate_template('inc/init.php');
require_once locate_template('inc/cleanup.php');
require_once locate_template('inc/titles.php');
require_once locate_template('inc/breadcrumbs.php');
require_once locate_template('inc/scripts.php');
require_once locate_template('inc/widgets.php');
require_once locate_template('inc/custom.php');
require_once locate_template('inc/customizer.php');
