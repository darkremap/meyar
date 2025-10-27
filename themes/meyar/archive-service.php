<?php get_header(); ?>

<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title">Our Services</h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="services-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('service-item'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-thumb">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <h2 class="service-title"><?php the_title(); ?></h2>
                    </a>
                    <div class="service-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>No services found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
