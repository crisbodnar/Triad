<?php
if(!isset($content_width))
    $content_width = 654;

if(!function_exists('triad_setup')) {
    function triad_setup(){
        require(get_template_directory() . '/inc/template-tags.php' );
        require(get_template_directory() . '/inc/tweaks.php' );
        load_theme_textdomain('triad', get_template_directory() . '/languages' );
        add_theme_support('auromatic-feed-links');
        add_theme_support('post-formats', array('aside'));
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_editor_style();
        register_nav_menus(array('primary' => __('Primary Menu', 'triad'), ));
    }
}
add_action('after_setup_theme', 'triad_setup');

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since triad 1.0
 */

if( !function_exists( 'sheape_widgets_init' ) ){
    function triad_widgets_init(){
        register_sidebar( array(
            'name' => __( 'Primary Widget Area', 'triad' ),
            'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );

        register_sidebar( array(
            'name' => __( 'Secondary Widget Area', 'triad' ),
            'id' => 'sidebar-2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Widget Area 1', 'triad' ),
            'id' => 'footer-sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Widget Area 2', 'triad' ),
            'id' => 'footer-sidebar-2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Widget Area 3', 'triad' ),
            'id' => 'footer-sidebar-3',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );
    }
}
add_action( 'widgets_init', 'triad_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function triad_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'header-script', get_template_directory_uri() . '/js/header-script.js', array( 'jquery'), '1.0', true );

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'triad_scripts' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * Hooks into the after_setup_theme action.
 *
 */

function triad_register_custom_background(){
    $args = array(
        'default-color' => 'efefef',
    );

    $args = apply_filters( 'triad_custom_background_args', $args );

    if( function_exists( 'wp_get_theme' ) ) {
        add_theme_support('custom-background', $args);
    }
}
add_action( 'after_setup_theme', 'triad_register_custom_background' );

function triad_register_favicon(){
    printf( "<link rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\" href=\"%s/favicon.ico\" />\n", site_url() );
}
add_action( 'wp_head', 'triad_register_favicon' );


require( get_template_directory() . '/inc/custom-header.php' );

function triad_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'triad' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'triad_wp_title', 10, 2 );