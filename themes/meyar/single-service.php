<?php get_header(); ?>

<div class="singleService">
    <section class="container singleService-content">    
        <div class="singleService-content-image">
            <?php if ( get_field('servicesheroimage') ) : ?>
                <img  src="<?php echo get_field('servicesheroimage')['url']; ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="singleService-text">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-service'); ?>>
                        
                         <div class="singleService-pointTitle">
                            <span></span>
                            <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>
                         </div>

                        <!-- Featured Image (optional) -->
                        <!-- <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?> -->

                        
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
    </section>
    <section class="container singleService-tizer">
        <div class="container singleService-tizer-header">
            <div class="singleService-header-title">
                <span></span>
                <h1 class="Dana-Black">تیز معرفی سرویس</h1>
            </div>
        </div>
        <div class="singleService-tizer-video">
            <video id="myVideo" poster="" controls>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/t.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <section class="container otherService">
        <div class="singleService-pointTitle">
            <span></span>
            <h1 class="singleService-text-title Dana-Black">سایر خدمات در حوزه فرآیندهای سازمانی</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'service',  // MUST be lowercase
                    'posts_per_page' => 6,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC'
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <div class="col-md-2">
                            <div class="otherService-card"style="background-color: #FDB913">
                                <?php if ( get_field('servicesicon') ) : ?>
                                    <img  src="<?php echo get_field('servicesicon')['url']; ?>" alt="">
                                <?php endif; ?>
                                <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
