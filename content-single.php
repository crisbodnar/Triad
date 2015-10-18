<?php
/**
 * @package Triad
 * @since Triad 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( has_post_thumbnail() ) : ?>
        <section class="thumbnail">
            <?php the_post_thumbnail(); ?>
        </section>
    <?php endif; ?>

    <section class="post-all-content">

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-meta">
            <div class="fa-date"></div>
            <?php triad_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'triad' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
        <?php
        /* translators: used between list items, there is a space after the comma */
        $category_list = get_the_category_list( __( ', ', 'triad' ) );

        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', __( ' ', 'triad' ) );

        if ( ! triad_categorized_blog() ) {
            // This blog only has 1 category so we just need to worry about tags in the meta text
            if ( '' != $tag_list ) {
                $meta_text = __( '<span class="fa-tag"></span> %2$s', 'triad' );
            } else {
                $meta_text = __( '', 'triad' );
            }

        } else {
            // But this blog has loads of categories so we should probably display them here
            if ( '' != $tag_list ) {
                $meta_text = __( 'This entry was posted in %1$s <span class="fa-tag"></span> %2$s ', 'triad' );
            } else {
                $meta_text = __( 'This entry was posted in %1$s. ', 'triad' );
            }

        } // end check for categories on this blog

        printf(
            $meta_text,
            $category_list,
            $tag_list,
            get_permalink(),
            the_title_attribute( 'echo=0' )
        );
        ?>

        <?php edit_post_link( __( 'Edit', 'triad' ), '<span class="edit-link">', '</span>' ); ?>

        </section>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
