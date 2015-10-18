<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Triad
 * @since Triad 1.0
 */
?>

<?php //sidebar 1 ?>
<div id="secondary" class="widget-area" role="complementary">
    <div id="secondary-content">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if( !dynamic_sidebar( 'sidebar-1' ) ) : ?>

        <aside id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </aside>

        <aside id="archives" class="widget">
            <h1 class="widget-title"><?php _e( 'Archives', 'triad' ); ?></h1>
            <ul>
                <?php wp_get_archives( array ( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h1 class="widget-title"><?php _e( 'Meta', 'triad' ); ?></h1>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>

    <?php endif; ?>
    </div>
</div><!-- #secondary .widget-area -->

<?php //sidebar 2 ?>
<?php if( is_active_sidebar( 'sidebar-2' ) ) : ?>

        <div id="tertiary" class="widget-area" role="supplementary">
                <div id="tertiary-content">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
        </div><!-- #tertiary .widget-area -->

<?php endif; ?>