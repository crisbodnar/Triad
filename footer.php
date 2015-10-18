<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package triad
 * @since triad 1.0
 */
?>

    </div> <!-- #main .site-main -->

    <footer id="colophon" class="site-footer" role="contentinfo">

        <div class="footer-content">

            <div id="footer-sidebar-1" class="widget-area">

                <?php if( !dynamic_sidebar( 'footer-sidebar-1' ) ) : ?>

                    <aside class="widget">
                        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                    </aside>


                <?php endif; ?>

            </div>

            <div id="footer-sidebar-2" class="widget-area">

                <?php if( !dynamic_sidebar( 'footer-sidebar-2' ) ) : ?>

                    <aside class="widget">
                        <?php the_widget( 'WP_Widget_Recent_Comments' ); ?>
                    </aside>


                <?php endif; ?>

            </div>

            <div id="footer-sidebar-3" class="widget-area">

                <?php if( !dynamic_sidebar( 'footer-sidebar-3' ) ) : ?>

                    <aside class="widget">
                        <?php the_widget( 'WP_Widget_Calendar' ); ?>
                    </aside>


                <?php endif; ?>

            </div>

        </div><!-- #footer-content -->


        <div class="site-info">
            <?php do_action( 'triad_credits' ); ?>
            <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'triad' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'triad' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( __( 'Theme: %1$s by %2$s.', 'triad' ), 'Triad', '<a href="https://www.facebook.com/crisbodnar" rel="designer">Cristian Bodnar</a>' ); ?>
        </div><!-- .site-info -->


    </footer><!-- #colophon .site-footer -->
    </div> <!-- site page -->

    <?php wp_footer(); ?>
</body>
</html>
