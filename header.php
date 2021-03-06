<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package triad
 * @since triad 2.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <div class="header-content">
            <div class="site-branding">

                <?php //header custom image ?>
                <?php $header_image = get_header_image();
                if ( ! empty( $header_image ) ) { ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                    </a>
                <?php } // if ( ! empty( $header_image ) ) ?>
                <?php // end header custom image  ?>

                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="
                <?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name')?></a></h1>
                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
            </div>
            <div class="header-buttons">
                <button id="header-nav-button"></button>
                <button id="header-search-button"></button>
            </div>
        </div>

        <div id="header-search">
            <div id="header-search-content">
                <?php get_search_form( ); ?>
            </div>
        </div>

        <nav role="navigation" id="main-navigation-menu" class="site-navigation main-navigation deactivated">
            <h1 class="assistive-text"><?php _e('Menu', 'triad'); ?></h1>
            <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e('Skip to content', 'triad'); ?>">
                    <?php _e('Skip to content', 'triad'); ?></a></div>
            <?php wp_nav_menu(  array(  'theme_location' => 'primary'));?>
        </nav>


    </header>

<div id="main" class="site-main">