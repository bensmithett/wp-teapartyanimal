<?php
/**
 * The Template for displaying all single posts.
 *
 * @package teapartyanimal
 */

get_header(); ?>

<div class="page__content" id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php teapartyanimal_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
</div>

<div class="page__sidebar">
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>