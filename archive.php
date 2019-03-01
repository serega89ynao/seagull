<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seagull
 */

get_header();

get_template_part( 'template-parts/breadcrumbs' );

?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : 
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; ?>

			<div class="pagination-area">
				<?php the_posts_pagination(array(
					'prev_next'    => false,
					'end_size'     => 2,    
					'mid_size'     => 2,
				)); ?>
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<div class="col-lg-4">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
