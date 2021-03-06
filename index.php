<?php
/*
 * this is index.
 *
 * @package conveythought
 */
get_header(); ?>
<!--main-->
<div id="main" class="col-md-9 col-sm-8 col-xs-12">


  <?php if( !(is_front_page( ) || is_home( ) ) )://toppage display ?>
  <!-- page title -->
    <h1 class="post-title"><?php single_post_title(); ?></h1>
  <!-- //page title -->
  <?php endif; ?>

<?php if (have_posts()) ://loop start ?>

<!-- post-wrap -->
  <div class="post-wrap">
  <?php while (have_posts()) : the_post(); ?>

  <!-- section -->
  <article <?php post_class('post section row'); ?>>

    <!-- archive-thumbnailtime -->
    <div class="archive-thumbnailtime col-md-2 col-sm-2 col-xs-3">
      <div class="time-img">
        <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <span class="thumbnail-day"><?php echo get_post_time('d'); ?></span>
          <span class="thumbnail-date"><?php echo get_post_time('Y.m'); ?></span>
        </a></p>
      </div>
    </div>
    <!-- //archive-thumbnailtime -->

    <?php if(has_post_thumbnail()){ ?>
    <!-- archive-post -->
    <div class="archive-post col-md-7 col-sm-7 col-xs-9">

      <header class="entry-header">
        <h1 class="archive-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
      </header>

      <div class="entry-content clearfix">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
      </div><!-- //entry-content -->

      <footer>
        <?php get_template_part( 'parts/parts', 'tag_category' ); ?>
      </footer>

    </div>
    <!-- //archive_post -->

      <?php
        //archive-thumbnail start
        echo '<div class="archive-thumbnail col-md-3 col-sm-3 col-xs-12"><div class="mini-img"><a href="';
        echo the_permalink();
        echo '">';
        the_post_thumbnail( 'list-thumbnail' );
        echo '</a></div></div>';
        //archive-thumbnail end
      }else{ ?>
      <!-- archive-post -->
      <div class="archive-post col-md-10 col-sm-10 col-xs-9">

        <header class="entry-header">
          <h1 class="archive-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        </header>

        <div class="entry-content clearfix">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
        </div><!-- //entry-content -->

        <footer>
          <?php get_template_part( 'parts/parts', 'tag_category' ); ?>
        </footer>

      </div>
      <!-- //archive_post -->

      <?php } ?>

    </article>
    <!-- //section -->
  <?php endwhile; ?>
  </div>
  <!-- //post-wrap -->

  <?php endif;//loop end ?>

  <?php the_posts_pagination();//pager ?>

</div><!-- //main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
