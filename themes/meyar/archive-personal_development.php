<?php get_header(); ?>

<div class="container">
    <h1>Personal Developments</h1>
    
    <div class="personal-development-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="development-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    
                    <?php
                    // Check if this item has children
                    $children = get_children(array(
                        'post_parent' => get_the_ID(),
                        'post_type'   => 'personal_development',
                        'numberposts' => -1
                    ));
                    
                    if ($children) {
                        echo '<div class="has-children">Contains ' . count($children) . ' sub-topics</div>';
                    }
                    ?>
                </div>
            <?php endwhile; ?>
            
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>No personal developments found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>