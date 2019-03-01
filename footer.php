<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="blogname-wr">
						<h3 class="blogname-footer"><?php bloginfo( 'name' ); ?></h3>
						<div class="icon-bar">
							<?php esc_attr( seagull_soc_link() ); ?>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<div class="menu-area-footer">
						<?php
						wp_nav_menu( array(
							'container'		 => 'nav',
							'container_class' => 'footer-menu',
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu1',
						) ); ?>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .footer-area -->

	<div class="site-info">
		<p><span>© </span> <?php echo date( ' Y ' ); ?> - <?php bloginfo( 'name' ); ?></p>
		<p><?php echo esc_html__( 'Proudly powered by', 'seagull' ); ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'seagull' ) ); ?>" target="_blank">
			WordPress
		</a></p>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
