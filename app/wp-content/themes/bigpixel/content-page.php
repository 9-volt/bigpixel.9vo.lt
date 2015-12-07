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

<!--
<div class="slider-wrapper">
<div class="slider">
<?php
echo "<div><a href=" . esc_url(get_permalink()) . ">";
the_post_thumbnail('post-thumbnail');
echo "</a>";
$title = simple_fields_value('title') ? simple_fields_value('title') : get_the_title();
$excerpt = str_replace("\n", '<br>', get_the_excerpt());
$bg = simple_fields_value('color') ? simple_fields_value('color') : '1B9B82';
$color = simple_fields_value('text_color') ? simple_fields_value('text_color') : 'FFFFFF';
echo "<div href=" . esc_url(get_permalink()) . " class='hover-content' style='background: #" . $bg . "; color: #" . $color . "'><div class='hover-content-inner'><h2>" . $title . "<span class='delimiter' style='background: #" . $color . "'></span></h2><p>" . $excerpt . "</p></div></div>";
echo "</div>\n";
?>
</div>
</div>
-->

<div class="slider-wrapper">
<div class="slider slick-initialized slick-slider">
  <div aria-live="polite" class="slick-list draggable" style="padding: 0px 61px;">
  <div class="slick-track" role="listbox" style="opacity: 1; width: 660px; margin: 0 auto;">
    <div class="slick-slide slick-cloned" style="width: 560px;">
      <div class="hover-content" style="display: flex;">
        <div class="hover-content-inner">
          <h2><?php echo get_the_title(); ?><span class="delimiter"></span></h2>
          <?php echo the_content();?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
