<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp_theme' ); ?></a>

	

	<div id="content" class="site-content">
        <header>
        <div class="nav">
            <ul class="left">
                <li class="home-btn">Grow</li>
            </ul>
            <ul class="right">
                <li><a href="https://itunes.apple.com/pt/genre/ios/id36?mt=8">Ios</a></li>
                <li><a href="https://play.google.com/">Android</a></li>
            </ul>
        </div>
    </header>