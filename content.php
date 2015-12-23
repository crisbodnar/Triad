<?php
/**
 * @package triad
 * @since triad 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> xmlns="http://www.w3.org/1999/html">



    <?php if( has_post_thumbnail() ) : ?>
        <section class="thumbnail">
            <?php the_post_thumbnail(); ?>
        </section>
    <?php endif; ?>

    <section class="post-all-content">

    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'triad' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <div class="fa fa-date"></div>
                <?php triad_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <div class="nr-comments">
                    <div class="fa fa-comments"></div>
                    <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'triad' ), __( '1 Comment', 'triad' ), __( '% Comments', 'triad' ) ); ?></span>
                </div>
             <?php endif; ?>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'triad' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'triad' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'triad' ) );
            if ( $categories_list ) :
                ?>
                <span class="cat-links">
                <?php printf( __( 'Posted in %1$s', 'triad' ), $categories_list ); ?>
                <br>
            </span>
            <?php endif; // End if categories ?>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', __( '  ', 'triad' ) );
            if ( $tags_list ) :
                ?>
                <span class="fa-tag"> </span>
                <span class="tag-links">
                <?php printf( __( '%1$s', 'triad' ), $tags_list ); ?>
            </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>


        <?php edit_post_link( __( 'Edit', 'triad' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>

        </footer><!-- .entry-meta -->
    </section><!-- .post-content -->
</article><!-- #post-<?php the_ID(); ?> -->