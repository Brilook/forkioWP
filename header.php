<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forkio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
        <div class="container">
            <nav class="header-nav">
                <a href="#" class="header-nav-logo">
                    <div class="header-nav-logo_img"></div>
                    <h2 class="header-nav-logo_title">ForkIO</h2>
                </a>
                <!-- <ul class="header-nav_items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#Overview">Overview</a></li>
                    <li><a href="#AboutFork">About Fork</a></li>
                    <li><a href="#Options">Buying Options</a></li>
                    <li><a href="#Support">Support</a></li>
                </ul> -->

                <?php
                 wp_nav_menu( array(
                    'theme_location' => 'headermenu',
                    'menu_id'        => 'header-menu',
                    'menu_class'     => 'header-nav_items',
                    'container_class'=> 'header-nav_items',
                ) );
                ?>

                <a href="#" class="button button_header">Buy Now</a>
                <a href="#" class="menu-link ">
                    <span></span>
                </a>
            </nav>
        </div>
    </header>