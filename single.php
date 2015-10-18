<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Triad
 * @since Triad 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php while( have_posts() ) : the_post(); ?>

                <?php triad_content_nav( 'nav-above' ); ?>

                <?php get_template_part( 'content', 'single' ); ?>

                <?php triad_content_nav( 'nav-below' ); ?>

                <?php
                    //If comments are open or we have at least one comment, load the comment template
                    if( comments_open() || get_comments_number() != '0' )
                        comments_template( '', true );
                ?>
            <?php endwhile; //end of the loop ?>
        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>