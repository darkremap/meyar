<?php get_header(); ?>

<div class="singleService">
        <div class="container singleService-content">
               
                <div class="singleService-content">
                    <div class="singleService-content-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servisesSinglePage-heroImage.png" alt="">
                    </div>

                    <div class="singleService-text">
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>
                                
                                <article id="post-<?php the_ID(); ?>" <?php post_class('single-service'); ?>>
                                    
                                    <!-- Service Title -->
                                    <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>

                                    <!-- Featured Image (optional) -->
                                    <!-- <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="service-image">
                                            <?php the_post_thumbnail('large'); ?>
                                        </div>
                                    <?php endif; ?> -->

                                    <!-- Service Content -->
                                    <div class="singleService-text-content">
                                        <?php the_content(); ?>
                                    </div>

                                </article>

                            <?php endwhile;
                        else :
                            echo '<p>No service found.</p>';
                        endif;
                        ?>
                    </div>
                </div>
        </div>
</div>

<?php get_footer(); ?>
