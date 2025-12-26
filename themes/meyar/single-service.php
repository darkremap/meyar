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
                            <div class="singleService-pointTitle-farsi">
                                <span></span>
                                <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>
                            </div>
                            <h2 class="Dana-Bold">
                                <?php if ( get_field('servicesenglishtitle') ) : ?>
                                    <?php echo get_field('servicesenglishtitle'); ?>
                                <?php endif; ?>
                            </h2>
                        </div>
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
    <?php if ( get_field('servicetizer') ) : ?>  
    <section class="container singleService-tizer">
        <div class="container singleService-tizer-header">
            <div class="singleService-header-title">
                <span></span>
                <h1 class="Dana-Black">تیز معرفی سرویس</h1>
            </div>
        </div>
        <?php 
        $aparat_url =  get_field('servicetizer');
        if ($aparat_url && preg_match('/aparat\.com\/v\/([a-zA-Z0-9]+)/', $aparat_url, $matches)) :
            $video_id = $matches[1];
        ?>
            <div class="singleService-tizer-video aparat-responsive">
                <iframe
                    src="https://www.aparat.com/video/video/embed/videohash/<?php echo esc_attr($video_id); ?>/vt/frame"
                    allowfullscreen
                    webkitallowfullscreen
                    mozallowfullscreen>
                </iframe>
            </div>
        <?php endif; ?>
    </section>
    <?php endif; ?> 

    <section class="container otherService">
        <div class="singleService-header-title">
            <span></span>
            <h1 class="Dana-Black">سایر خدمات در حوزه فرآیندهای سازمانی</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                <?php
                $current_post_id = get_the_ID(); // دریافت ID پست فعلی
                $args = array(
                    'post_type'      => 'service',  // MUST be lowercase
                    'posts_per_page' => 6,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC',
                    'post__not_in'   => array($current_post_id) // حذف پست فعلی از نتایج
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <div class="col-md-2 col-4">
                            <a href="<?php the_permalink(); ?>">
                                <div class="otherService-card">
                                    <?php if ( get_field('servicesicon') ) : ?>
                                        <img  src="<?php echo get_field('servicesicon')['url']; ?>" alt="">
                                    <?php endif; ?>
                                    <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
