<?php
/*
 * this is 404.
 *
 * @package conveythought
 */
get_header(); ?>
<!--main-->
<div id="main" class="col-md-9 col-sm-8 col-xs-12">
  <!-- post-wrap -->
  <div class="post-wrap">

    <!-- post-title -->
    <h1 class="post-title">
      <?php _e('Page Not Found.', 'conveythought'); ?>
    </h1>
    <!-- //post-title -->

    <!-- section -->
    <article <?php post_class('post section'); ?>>

      <!-- entry-content -->
      <div class="entry-content clearfix">
        <p><?php _e( 'Page Not Found.' , 'conveythought' ); ?></p>
        <p><?php _e( 'You URL is wrong.' , 'conveythought' ); ?></p>
        <p><?php _e( 'Or, there is already a possibility that the page has been deleted.' , 'conveythought' ); ?></p>
        <p><?php _e( 'Please search if necessary.' , 'conveythought' ); ?></p>

        <?php get_search_form();//search_form ?>

      </div>
      <!-- //entry-content -->

    </article>
    <!-- //section -->

  </div>
  <!-- //post-wrap -->
</div>
<!--#main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
