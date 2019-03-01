<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package seagull
 */

get_header();

get_template_part( 'template-parts/breadcrumbs' );

?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<section id="primary" class="content-area">
				<main id="main" class="site-main">

					<?php if ( have_posts() ) : 
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
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
</section><!-- #primary -->
</div>
<div class="col-lg-4">
	<?php get_sidebar(); ?>
</div>
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
