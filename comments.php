<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to teapartyanimal_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package teapartyanimal
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

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<div class="comments-area__title">
			<h2>
				<?php
					printf( _nx( 'One cup of comments', '%1$s cups of comments', get_comments_number(), 'comments title', 'teapartyanimal' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'teapartyanimal' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'teapartyanimal' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'teapartyanimal' ) ); ?></div>
		</nav><!-- #comment-nav-before -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use teapartyanimal_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define teapartyanimal_comment() and that will be used instead.
				 * See teapartyanimal_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => 'teapartyanimal_comment' ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'teapartyanimal' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'teapartyanimal' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'teapartyanimal' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'teapartyanimal' ); ?></p>
	<?php endif; ?>

	<?php $comments_args = array(
		'title_reply' => 'Pour your reply...'
		); ?>
	<?php comment_form($comments_args); ?>

</div><!-- #comments -->
