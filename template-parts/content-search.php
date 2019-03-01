<?php
/**
 * Template part for displaying results in search pages
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
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-img.jpg" alt="<?php echo esc_html__('no-image', 'seagull');?>">
					</a>
				<?php } ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="entry-meta">
					<?php the_date(); ?>
					<span>-</span>
					<?php the_category(', '); ?>
				</div><!-- .entry-meta -->

				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?> </a></h2>
				<?php if ( 'post' === get_post_type() ) :
				 endif; ?>

				<div class="entry-summary entry-excerpt">
					<?php seagull_excerpt_max_charlength(140); ?>
				</div><!-- .entry-summary -->
			</div><!-- .entry-content -->

		</article><!-- #post-<?php the_ID(); ?> -->
	</div><!-- .row -->
</div>
