<?php
/*
 * this is related articles parts.
 *
 * If you want to display related articles.
 *
 * @package conveythought
 */
  $categories = get_the_category($post->ID);
  $category_ID = array();
  $posts_per_page = get_theme_mod('conveythought_related_article_count' );

  foreach($categories as $category):
    array_push( $category_ID, $category -> cat_ID);
  endforeach ;
  $args = array(
    'post__not_in' => array($post -> ID),
    'posts_per_page'=> $posts_per_page,
    'category__in' => $category_ID,
    'orderby' => 'rand',
  );
  $query = new WP_Query($args);
?>
  <?php if( $query -> have_posts() ): ?>

  <!-- related_entry_area -->
  <div class="related-entry-area">
    <h2><?php _e( 'Related Article','conveythought' ); ?></h2>
    <ul class="related_ul row">
      <?php while ($query -> have_posts()) : $query -> the_post(); ?>
        <li class="related-entry col-sm-2 col-xs-4">
          <div class="related-entry-content">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php if ( has_post_thumbnail() ): ?>
              <p class="related-entry-thumbnail"><?php echo get_the_post_thumbnail($post->ID); ?></p>
              <?php else: ?>
              <p class="related-entry-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE" title="NO IMAGE" /><p>
              <?php endif; ?>
              <p><?php echo mb_strimwidth($post->post_title, 0, 32, "..", "UTF-8"); ?></p>
            </a>
          </div><!-- /.related-entry-content -->
        </li><!-- /.related-entry -->
      <?php endwhile;?>
    </ul>
  </div>
  <!-- //related_entry_area -->

  <?php else:?>

  <p><?php _e('Related articles was not.', 'conveythought'); ?></p>
    <?php
      endif;
      wp_reset_postdata();
    ?>
<br style="clear:both;">
