<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Triad
 * @since Triad 1.0
 */
?>

    <article id="pots-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if( has_post_thumbnail() ) : ?>
            <section class="thumbnail">
                <?php the_post_thumbnail(); ?>
            </section>
        <?php endif; ?>

        <section class="post-all-content">

        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="pages-links">' . __( 'Pages:', 'triad' ),  'after' => '</div>') ); ?>
            <?php edit_post_link( __( 'Edit', 'triad' ), '<span class="edit-link">', '</span>' ); ?>
            <?php
                    //If comments are open or we have at least one comment, load the comment template
                    if( comments_open() || get_comments_number() != '0' )
                        comments_template( '', true );
            ?>
        </div><!-- .entry-content -->

        </section>
    </article><!-- #post-id -->
