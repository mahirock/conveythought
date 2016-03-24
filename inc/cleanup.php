<?php
/*
 * this is cleanup & delete
 *
 * @package conveythought
 */
/*--------------------------------------------------------------
  Remove id, the class of the line of the custom menu
--------------------------------------------------------------*/
add_filter('nav_menu_item_id', 'conveythought_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'conveythought_css_attributes_filter', 100, 1);
function conveythought_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
