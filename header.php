<?php
/*
 * this is header parts.
 *
 * @package conveythought
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- container -->
<div id="container">

<!-- header -->
	<header id="header">
		<?php  //menu
		$args = array(
		 'theme_location' => 'headernav',
		 'fallback_cb' => '',
		 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
		 'container' => false,
		 'echo' => false,
		);
		$gMenu = wp_nav_menu( $args ) ;
		// If the menu is set.
		if ($gMenu) {
			echo '
			<!-- nav -->
			<div class="header-nav navbar-fixed-top">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
						<span class="sr-only">MENU</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					</div>
				<div id="gnavi" class="collapse navbar-collapse">';
			echo $gMenu;
			echo '
					</div>
				</nav>
				</div>
				<!-- //nav -->';
		}else {//If the menu is not set.
			//nothing none.
		} ?>
		<div class="row" role="banner">
			<!-- header_description -->
			<div class="header-description col-sm-12">
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
			<!-- //header_description -->

			<!-- header_title -->
			<div class="header-title col-sm-12">
	<?php
	/*--------------------------------------------------------------
	  logo display
	--------------------------------------------------------------*/
			if ( get_header_image() ) : ?>
				<!-- site_title -->
				<h1 class="site-title">
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php bloginfo( 'description' ); ?>' rel='home'>
						<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
					</a>
				</h1>
				<!-- //site_title -->

				<?php else : ?>
				<!-- site_title -->
				<h1 class='site-title'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php bloginfo( 'description' ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
				</h1>
				<!-- //site_title -->

				<?php endif; //logo display end ?>
			</div>
			<!-- //header_title -->

		</div>

	</header>
<!-- //header -->

	<?php if( is_front_page() )://toppage display ?>
		<!-- Mainvisu -->
		<?php
		 if(get_option('')){
		}else{
		 echo '<div class="mainvisu row">';
		 get_template_part( 'parts/parts', 'slider' );
		 echo '</div>';

		}
		?>
		<!-- //Mainvisu -->
	<?php endif; ?>

<!-- contents -->
<div id="contents" class="row">
