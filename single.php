<?php
/*
 * this is single.
 *
 * @package conveythought
 */
get_header(); ?>
<!--main-->
<div id="main" class="col-md-9 col-sm-8 col-xs-12">

	<?php conveythought_breadcrumb();//breadcrumb ?>

	<?php if (have_posts()) ://loop start ?>
		<!-- post-wrap -->
		<div class="post-wrap">
		<?php while (have_posts()) : the_post(); ?>

			<!-- section -->
			<article <?php post_class('post section'); ?>>

				<header class="entry-header">
					<h1 class="post-title"><?php the_title(); ?></h1>
					<?php get_template_part( 'parts/parts', 'tag_category' ); ?>
				</header>

				<div class="entry-content">
					<?php the_post_thumbnail('full'); ?>
					<?php the_content(); ?>
				</div><!--entry-content-->

				<footer class="entry-footer">
					<div class="data"><?php _e('DATE:', 'conveythought'); ?><?php the_time('Y.m.d'); ?> | <?php _e('Author:', 'conveythought'); ?><?php the_author(); ?></div>
				</footer>

					<?php //if There are many pages.
					$defaults = array(
						'before'           => '<div class="link-page-nav row"><p>',
						'after'            => '</p></div>',
						'link_before'      => '<span>',
						'link_after'       => '</span>',
						'next_or_number'   => 'number',
						'separator'        => ' ',
						'nextpagelink'     => __( 'Next page','conveythought' ),
						'previouspagelink' => __( 'Previous page','conveythought' ),
						'pagelink'         => '%',
						'echo'             => 1
					);
					wp_link_pages( $defaults );
					?>

				<!-- nav-links -->
				<div class="nav-links row">
					<div class="nav-previous col-sx-6 col-md-6 col-lg-6"><?php previous_post_link('%link','%title');?></div>
					<div class="nav-next col-sx-6 col-md-6 col-lg-6"><?php next_post_link('%link','%title'); ?></div>
				</div>
				<!-- //nav-links -->

			</article>
			<!--section-->

		<?php endwhile; ?>
	</div>
	<!-- //post-wrap -->

	<?php comments_template(); ?>
	<?php endif; ?>

	<?php if ( is_related_article_visible() ):
		get_template_part( 'parts/parts', 'related' );
		endif; ?>

</div><!-- //main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
