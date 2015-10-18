<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Triad
 * @since Triad 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content">

        <?php if( have_posts() ) : ?>

            <?php triad_content_nav( 'nav-above' ) // next-previous post links?>

            <?php //Start the Loop ?>
            <?php while( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

            <?php triad_content_nav( 'nav-below' ) // next-previous post links?>

        <?php else : ?>

            <?php get_template_part( 'no-results', 'index'); // in case nothing is found ?>

        <?php endif; ?>
    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>