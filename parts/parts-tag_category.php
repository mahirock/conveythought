<?php
/*
 * this is tag-category parts.
 *
 * @package conveythought
 */
?>
<?php if ( get_the_tags() ) : ?>

  <!-- tag_area -->
  <div class="tag-area">
    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> : <?php the_tags('',' ',''); ?>
  </div>
  <!-- //tag_area -->

<?php endif; ?>

<?php if ( get_the_category() ) : ?>

  <!-- category_area -->
  <div class="category-area">
    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> : <?php the_category(' '); ?>
  </div>
  <!-- //category_area -->

<?php endif; ?>
