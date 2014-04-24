<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Guridon
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="row hfeed site">
        <div id="side-container" class="small-12 medium-4 large-3 columns">
            <div id="masthead" class="site-header" role="banner">
                    <div class="site-branding">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div>

                    <nav id="site-navigation" class="main-navigation" role="navigation">
                            <h1 class="menu-toggle"><?php _e( 'Menu', 'guridon' ); ?></h1>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
                    </nav><!-- #site-navigation -->

            </div><!-- #masthead -->
            <?php get_sidebar(); ?>
        </div>
	<div id="content" class="small-12 medium-8 large-9 columns site-content">
