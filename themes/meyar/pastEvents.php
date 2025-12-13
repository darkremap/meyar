<?php
/**
 * Template Name: pastEvents
 */
get_header(); ?>

<section class="basePages">
    <div class="container">
        <div class="row contactUs-header">
            <div class="col-md-6 contactUs-title">
                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                <h2 class="Dana-Regular">Articles</h2>
            </div>
            <div class="col-md-6 contactUs-image">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/contactUs.png" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>