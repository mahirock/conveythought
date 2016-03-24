<?php
/*
 * this is search.
 *
 * @package conveythought
 */
get_header(); ?>


<!--main-->
<div id="main" class="col-md-9 col-sm-8 col-xs-12">

  <?php conveythought_breadcrumb();//breadcrumb ?>
  <!-- post-wrap -->
  <div class="post-wrap search-area">

    <!-- post-title -->
    <h1 class="post-title">
      <?php _e('SEARCH', 'conveythought'); ?>
    </h1>
    <!-- //post-title -->

    <h2>
      <?php the_search_query(); ?><?php _e('search results :', 'conveythought'); ?><?php echo $wp_query->found_posts; ?><?php _e('Hit.', 'conveythought'); ?>
    </h2>

    <?php if(have_posts()) ://loop start ?>
    <?php while(have_posts()):the_post() ?>

      <!-- post-search -->
      <div class="post-search">
        <?php
        if(has_post_thumbnail()){
        echo '<ul class="row"><li class="large-2 columns mini-img-area"><div class="mini-img">';
        the_post_thumbnail( array(100,100) );
        echo '</div></li>';
        }else{ ?>

        <ul class="row">
          <li class="large-2 columns mini-img-area"><div class="time-img"><?php the_time('Y.m.d'); ?></div></li>
        <?php } ?>
          <li class="large-10 columns excerpt-area">
            <h3><?php _e('Hit Post:', 'conveythought'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
          </li>
        </ul>
      </div>
      <!-- //post-search -->

    <?php endwhile; ?>
    <?php else: ?>

      <!-- post -->
      <div class="post">
        <p>
          <?php _e('Not found.', 'conveythought'); ?><br />
          <?php _e('Words might not exist wrong or page.', 'conveythought'); ?><br />
          <?php _e('Please search again to put another word.', 'conveythought'); ?>
        </p>
      </div>
      <!-- //post -->

    <?php endif;//loop end ?>
  </div>
  <!-- //post-wrap -->

  <!-- pager -->
  <?php if (function_exists("conveythought_pager")) {
      conveythought_pager($additional_loop->max_num_pages);
  } ?>
  <!-- pager -->

</div><!-- //main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
