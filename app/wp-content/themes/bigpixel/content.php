<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$title = simple_fields_value('title') ? simple_fields_value('title') : get_the_title();
$excerpt = str_replace("\n", '<br>', get_the_excerpt());
$bg = simple_fields_value('color') ? simple_fields_value('color') : '1B9B82';
$color = simple_fields_value('text_color') ? simple_fields_value('text_color') : 'FFFFFF';
$image = simple_fields_value('image');
?>

<div class="article-single">
	<div class="header" style="background: #<?php echo $bg; ?>; color: #<?php echo $color; ?>">
		<?php
		echo "<div class='hover-content' style='background: #" . $bg . "; color: #" . $color . "'><div class='hover-content-inner'><h2>" . $title . "<span class='delimiter' style='background: #" . $color . "'></span></h2><p>" . $excerpt . "</p></div></div>";
		?>
	</div>
	<div class="content">
		<?php
		if ($image) {
			echo '<div class="content-image"><img src="' . $image['url'] . '" alt="' . $title . '"/></div>';
		}
		?>
		<div class="content-text <?php if (!$image) {echo 'content-text-full';} ?>">
			<?php the_title( '<h3 class="content-title">', '</h3>' ); ?>
			<?php the_content(); ?>
		</div>
	</div>
</div>
