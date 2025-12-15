<?php get_header(); ?>

<main id="main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="article-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="article-content">
                <?php the_content(); ?>
            </div>

            <?php comments_template(); ?>
        </article>

    <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
