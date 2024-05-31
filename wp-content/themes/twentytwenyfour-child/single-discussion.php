<?php get_header(); ?>

<div class="container">
    <div class="discussion-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <div class="entry-categories">
                        <span class="cat-links"><?php the_category(', '); ?></span>
                    </div>
                    <div class="entry-tags">
                        <span class="tag-links"><?php the_tags('', ', ', ''); ?></span>
                    </div>
                </footer>
            </article>

            <div class="comments-section">
                <?php
                // If comments are open or there's at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no discussions found.', 'textdomain' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
