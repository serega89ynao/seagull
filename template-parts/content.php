<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seagull
 */
?>
<div class="col-12">
	<div class="row">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-article' ); ?>>
			<header class="entry-header">
				<?php 
				if( has_post_thumbnail() ) {
					seagull_post_thumbnail( 'seagull_thumb' );
				}
				else { ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-img.jpg" alt="no-image">
					</a>
				<?php } ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="entry-meta">
					<?php seagull_posted_on(); ?>
					<span>-</span>
					<?php seagull_posted_category(); ?>
				</div><!-- .entry-meta -->

				<div class="entry-title">
					<?php if ( is_singular() ) : ?>
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title_attribute() ?></a></h1>
					<?php else : ?>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title_attribute() ?></a></h2>
					<?php endif; ?>
				</div><!-- .entry-title -->

				<div class="entry-excerpt">
					<?php seagull_excerpt_max_charlength(140); ?>
				</div><!-- .entry-excerpt -->
			</div><!-- .entry-content -->
			
		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
