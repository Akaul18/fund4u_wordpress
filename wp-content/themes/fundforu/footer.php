<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundforu
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="footer-logo">
			<img src="<?php echo 'http://localhost/fund4u/wp-content/uploads/2019/03/new_LOGO.png' ?>" alt="footer logo">
		</div>

		<div class="site-info">

			<?php
			wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'social-menu',
			) );
			?>
			<div class="copyright">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '© FUND4U Inc. All rights reserved.', 'fundforu' ), 'WordPress' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


</body>
</html>
