<?php
/*
 * this is custom
 *
 * @package conveythought
 */
 /*--------------------------------------------------------------
   Search results exclude the page other than the normal post from
 --------------------------------------------------------------*/
function conveythought_search_filter($query) {
  if (!$query -> is_admin && $query -> is_search) {
    $query -> set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'conveythought_search_filter');

/*--------------------------------------------------------------
  search widget customize
--------------------------------------------------------------*/
function conveythought_search_form($form) {
$form = '<form method="get" id="searchform" action="' . home_url() . '/" class="form-inline">
<div>
<input type="text" value="' . esc_attr(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
</div>
</form>';
return $form;
}
add_filter('get_search_form', 'conveythought_search_form' );
