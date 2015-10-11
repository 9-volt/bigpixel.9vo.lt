<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

	<div id="content" class="site-content">
		<main id="project" class="" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
