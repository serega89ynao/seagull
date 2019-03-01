<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seagull
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-article article-page' ); ?>>
	

	

	<div class="entry-content content-page">
		<h1 class="entry-title"><?php the_title_attribute(); ?></h1>
		
		<?php the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seagull' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
