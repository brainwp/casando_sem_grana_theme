<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package casando_sem_grana_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

			<div id="img-header-left">
			</div><!-- #img-header-left -->

				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">

					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

				</a>

			<div class="box-rss">
				<h2><a href="<?php echo home_url( '/feed' ); ?>" target="_blank"><?php bloginfo( 'description' ); ?></a></h2>
				<a href="<?php echo home_url( '/feed' ); ?>" target="_blank"><?php echo of_get_option('rss_info'); ?></a>
			</div><!-- .box-rss -->

			<a class="conh-morando" href="http://www.morandosemgrana.com.br" target="_blank">
			</a><!-- .conh-morando -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
