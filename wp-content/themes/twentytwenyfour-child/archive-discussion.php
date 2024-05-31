<?php get_header(); ?>

<div class="container">
    <h1 class="page-title">Discussions</h1>

    <?php if ( have_posts() ) : ?>
        <div class="discussion-archive">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="discussion-item">
                    <h2 class="discussion-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="discussion-meta">
                        <span class="discussion-date"><?php echo get_the_date(); ?></span>
                        <span class="discussion-author">by <?php the_author(); ?></span>
                    </div>
                    <div class="discussion-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            // Display navigation to next/previous set of posts, if applicable.
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '« Previous', 'textdomain' ),
                'next_text' => __( 'Next »', 'textdomain' ),
            ) );
            ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'No discussions found.', 'textdomain' ); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
