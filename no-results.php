<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Triad
 * @since Triad 1.0
 */
?>

<article id="post-0" class="post no-results not-found">
    <section class="post-all-content">

    <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Nothing found', 'triad' ); ?></h1>
    </header>

    <div class="entry-content">
        <?php if( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>', 'triad' ), admin_url( 'post-new.php' ) ); ?></p>

        <?php elseif( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'triad' ); ?></p>

            <div class="search-notfound">
                <?php get_search_form(); ?>
            </div>

        <?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'triad' ); ?></p>

            <div class="search-notfound">
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>
    </div><!-- .entry-content -->

    </section>

</article><!-- #post-0 .post .no-results .not-found -->