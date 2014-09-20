<?php get_header(); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>

                        <?php if ( have_posts() ) : while ( have_posts() ) :
        the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title();
        ?></a></h2>
                        <p><?php the_author_posts_link(); ?>
                        on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>
                        <?php the_content('Read More...'); ?></p>

                        <?php endwhile; else: ?>
                        <p><?php _e('No posts were found. Sorry!'); ?></p>
                        <?php endif; ?>

                    </header>
                </article>

                <?php get_sidebar(); ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php get_footer(); ?>