<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seagull
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'seagull' ),
				number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>

			<ol class="comment-list">
				<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
				?>
			</ol><!-- .comment-list -->

			<?php
            // Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
			<nav class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'seagull' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'seagull' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'seagull' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'seagull' ); ?></p>
	<?php endif; ?>

<?php endif; // have_comments() ?>
<div class="comments-wrap">
	<?php
	$comments_args = array(
		'fields' => array(
			'author' => '<div class="input-group comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'seagull' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',

			'email'  => '<div class="input-group comment-form-email"><label for="email">' . esc_html__( 'Email', 'seagull' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
		),
		'class_submit'  => 'btn-comment',
		'submit_field'  => '<div class="btn-comment-wrap">%1$s %2$s</div>',
		'comment_field' => '<div class="input-group comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'seagull' ) . '</label> <textarea id="comment" class="area-comment" name="comment" aria-required="true" required="required" style="font-size:16px !important;"></textarea></div>',
	);

	comment_form($comments_args); ?>
</div><!-- .comments-wrap -->
</div><!-- #comments -->