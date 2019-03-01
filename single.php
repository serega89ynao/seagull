<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seagull
 */

get_header(); 

get_template_part( 'template-parts/breadcrumbs' );

?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single', get_post_type() );

				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next post >>', 'seagull' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post >>', 'seagull' ) . '</span> ',

					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( '<< Previous post', 'seagull' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( '<< Previous post', 'seagull' ) . '</span> ',
				) );

			// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
			endif;

		endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .container -->

<?php get_footer(); ?>
