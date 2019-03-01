<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package seagull
 */

get_header(); ?>

 <div class="container">

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">

 			<section class="error-404 not-found">
 				<header class="page-header">
 					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'seagull' ); ?></h1>
 				</header><!-- .page-header -->

 				<div class="page-content">
 					<p><?php esc_html_e( 'It seems that nothing was found in this place. Try using the menu or site search.', 'seagull' ); ?></p>

 					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

