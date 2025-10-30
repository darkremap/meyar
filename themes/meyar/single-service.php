<?php get_header(); ?>

<div class="singleService">
        <div class="container singleService-content">
            <div class="row">
                <div class="col-md-3 singleService-content-right">
                    <div class="singleService-content-right-header">
                        <h4 class="Dana-Regular">دیگر خدمات</h4>
                        <h1 class="Dana-Black">فرآیندهای سازمانی</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-h-card">
                                <img class="site-logo-Soff" src="<?php echo get_template_directory_uri(); ?>/assets/images/.png" alt="Meyar">
                                <div class="service-h-card-body">
                                    <h5 class="service-h-card-title">بهبود سلامت سازمانی کارکنان</h5>
                                    <p class="service-h-card-text">فرآیندی نظام‌مند است که با تمرکز بر ارتقای رفاه روانی-اجتماعی کارکنان و ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 singleService-content-left">
                    <div class="singleService-content-left-image">

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
</div>

<?php get_footer(); ?>
