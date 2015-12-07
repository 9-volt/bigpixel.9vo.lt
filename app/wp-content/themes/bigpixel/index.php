<?php get_header(); ?>

	<!-- <div id="content" class="site-content"> -->
		<!-- <div id="projects" class=""> -->

		<?php if ( have_posts() ) : ?>

			<div id="home-slider-wrapper" class="slider-wrapper">
			<div id="home-slider" class="slider">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				echo "<div><a href=" . esc_url(get_permalink()) . ">";
				the_post_thumbnail('post-thumbnail');
				echo "</a>";
				$title = simple_fields_value('title') ? simple_fields_value('title') : get_the_title();
				$excerpt = str_replace("\n", '<br>', get_the_excerpt());
				$bg = simple_fields_value('color') ? simple_fields_value('color') : '1B9B82';
				$color = simple_fields_value('text_color') ? simple_fields_value('text_color') : 'FFFFFF';
				echo "<a href=" . esc_url(get_permalink()) . " class='hover-content' style='background: #" . $bg . "; color: #" . $color . "'><div class='hover-content-inner'><h2>" . $title . "<span class='delimiter' style='background: #" . $color . "'></span></h2><p>" . $excerpt . "</p></div></a>";
				echo "</div>\n";

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			?>
			</div><!-- #home-slider -->
			<button id="slick-prev-button" type="button" class="slick-prev slick-arrow" aria-label="Previous" role="button"></button>
			<button id="slick-next-button" type="button" class="slick-next slick-arrow" aria-label="Next" role="button"></button>
			</div><!-- #home-slider-wrapper -->
			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		<!-- </div>.site-content -->
	<!-- </div>.site-content -->

<?php get_footer(); ?>
