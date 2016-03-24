<?php
/*
 * this is footer parts.
 *
 * @package conveythought
 */
?>
</div>
<!-- //contents -->

<!-- footer -->
<footer>
	<div id="footer">

		<!-- footer-area -->
		<div id="footer-area" class="row">
			<?php dynamic_sidebar('sidebar3'); ?>
		</div>
		<!-- //footer-area -->

		<!-- copyright_area -->
		<div id="copyright-area">
			<small>copyright &copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> All Rights Reserved.</small>
		</div>
		<!-- //copyright_area -->

	</div>
</footer>
<!-- //footer -->
</div>
<!-- //container -->
<?php wp_footer(); ?>
</body>
</html>
