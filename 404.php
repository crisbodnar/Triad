<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package triad
 * @since triad 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <article id="post-0" class="post error404 not-found">
                <section class="post-all-content">

                    <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'The page you were looking for can not be found', 'triad' ); ?></h1>
                </header>

                <div class="entry=content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search', 'triad'); ?></p>

                    <div class="search-notfound">
                    <?php get_search_form(); ?>
                    </div>

                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                    <div class="widget">
                        <h2 class="widgettitle"><?php _e('Most Used Categories', 'triad' ); ?></h2>
                        <ul>
                            <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                        </ul>
                    </div><!-- .widget -->

                    <?php
                        $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly arhives. %1$s', 'triad'), convert_smilies( ':)' ) ) . '</p>';
                        the_widget( 'WP_Widget_Archives', 'dropwdown=1', "after_title=</h2>$archive_content")
                    ?>

                    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                </div><!-- .entry-content -->

                </section>
            </article><!-- .entry-content -->
        </div><!-- .entry-content -->
    </div><!-- .entry-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
