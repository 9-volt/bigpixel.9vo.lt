<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:300|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body class="<?php if ( (is_front_page() && is_home()) || is_page(2) ) {echo 'home';} ?>">
<div id="page" class="hfeed site ">
	<?php if ( (is_front_page() && is_home()) || is_page(2) ) : ?>
	<div class="pageheader">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pageheader__link">Portofolio</a>
		<a href="<?php echo get_page_link(2); ?>" class="pageheader__link">Contacts</a>
	</div>
	<?php endif; ?>
