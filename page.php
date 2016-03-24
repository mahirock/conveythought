<?php
/*
 * this is page.
 *
 * @package conveythought
 */
get_header(); ?>

<!--main-->
  <div id="main" class="col-md-9 col-sm-8 col-xs-12">

    <?php if( !( is_front_page( ) || is_home() ) ): ?>
      <!-- breadcrumb -->
      <?php conveythought_breadcrumb(); ?>
      <!-- //breadcrumb -->
    <?php endif; ?>

    <?php if (have_posts()) ://loop start ?>
      <!-- post-wrap -->
      <div class="post-wrap">
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class('post section'); ?>>

            <header class="entry-header">
              <h1 class="post-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content clearfix">
              <?php the_content(); ?>
            </div><!--entry-content-->

          </article>
          <!--section-->
        <?php endwhile; ?>
      </div>
      <!-- //post-wrap -->

      <?php comments_template(); ?>

    <?php endif; ?>

    <!-- nav-links -->
    <div class="nav-links clearfix">
      <div class="nav-previous"><?php previous_posts_link();?></div>
      <div class="nav-next"><?php next_posts_link(); ?></div>
    </div>
    <!-- //nav-links -->

</div><!-- //main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
