<?php
/**
 * Template Name: PersonalDevelopments
 */

get_header();
?>


<main id="primary" class="site-main">
    <div class="services-main">
        <section class="services-head container">
            <div class="row services-head-right align-items-center">
                <div class="col-md-5 col-6">
                    <h1 class="Dana-Black">توسعه فردی و ســازمــانـی</h1>
                    <h2 class="Dana-Regular">Personal and Organizational Development</h2>
                </div>
                <div class="col-md-7 col-6">
                    <!-- فضای خالی برای طرح‌بندی -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <?php
                $args = array(
                    'post_type'      => 'personal_development',
                    'posts_per_page' => -1,
                    'post_parent'    => 0,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                );
                $pd_query = new WP_Query($args);
                
                if ($pd_query->have_posts()) :
                    $i = 0;
                    while ($pd_query->have_posts()) : $pd_query->the_post();
                        
                        // تعیین رنگ بر اساس زوج/فرد بودن
                        $color = ($i % 2 != 0) ? '#FDB913' : '#75EABA';
                        $item_number = sprintf('%02d', $i + 1);
                        
                        if ($i % 2 == 0):
                ?>
                            <!-- حالت فرد -->
                            <div class="row personalServices-items basePosition">
                                <div class="col-9 personalServices-contentItem">
                                    <div class="personalServices-contentCard">
                                        <div class="personalServices-contentCard-iconbox">  
                                            <!-- SVG اول -->
                                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)"/>
                                                <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" fill="<?php echo $color; ?>"/>
                                                <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                <defs>
                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white"/>
                                                        <stop offset="1" stop-color="#A7A7A7"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            
                                            <!-- SVG دوم با لینک -->
                                            <a href="<?php the_permalink(); ?>">
                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                    <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                    <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" fill="<?php echo $color; ?>"/>
                                                    <path d="M17.1664 21.766L28.8088 21.8345C29.7827 21.8402 30.5678 22.6346 30.5621 23.6085C30.5562 24.5822 29.7619 25.3665 28.7881 25.3608L17.1457 25.2923C16.172 25.2866 15.3869 24.4931 15.3924 23.5193C15.3982 22.5454 16.1926 21.7603 17.1664 21.766Z" fill="white" stroke="white" stroke-width="2"/>
                                                    <path d="M24.7758 17.7493L24.7074 29.3916C24.7017 30.3655 23.9073 31.1506 22.9334 31.1449C21.9597 31.139 21.1754 30.3447 21.1811 29.3709L21.2495 17.7285C21.2552 16.7548 22.0488 15.9697 23.0225 15.9753C23.9964 15.981 24.7815 16.7754 24.7758 17.7493Z" fill="white" stroke="white" stroke-width="2"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_3795_1071" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#929292"/>
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear_3795_1071" x1="43.3765" y1="13.4261" x2="4.13105" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#929292"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="personalServices-contentCard-header">
                                            <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                                            <div class="personalservices-contentCard-text">
                                                <?php if (get_field('personaldevelopmentssummary')) : ?>
                                                    <p class="m-0 Dana-Regular">
                                                        <?php echo get_field('personaldevelopmentssummary'); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 personalServices-tagItem">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="personalServices-tagCard">
                                            <div class="personalServices-tagCard-body" style="background-color: <?php echo $color; ?>">
                                                <h1 class="Dana-Medium"><?php echo $item_number; ?></h1>
                                                <?php if (get_field('personaldevelopmentsicone')) : ?>
                                                    <img src="<?php echo get_field('personaldevelopmentsicone')['url']; ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                        <?php else: ?>
                            <!-- حالت زوج -->
                            <div class="row personalServices-items reversPosition">
                                <div class="col-3 personalServices-tagItem">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="personalServices-tagCard">
                                            <div class="personalServices-tagCard-body" style="background-color: <?php echo $color; ?>">
                                                <h1 class="Dana-Medium"><?php echo $item_number; ?></h1>
                                                <?php if (get_field('personaldevelopmentsicone')) : ?>
                                                    <img src="<?php echo get_field('personaldevelopmentsicone')['url']; ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-9 personalServices-contentItem">
                                    <div class="personalServices-contentCard">
                                        <div class="personalServices-contentCard-header">
                                            <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                                            <div class="personalservices-contentCard-text">
                                                <?php if (get_field('personaldevelopmentssummary')) : ?>
                                                    <p class="m-0 Dana-Regular">
                                                        <?php echo get_field('personaldevelopmentssummary'); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="personalServices-contentCard-iconbox">  
                                            <!-- SVG اول -->
                                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)"/>
                                                <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" fill="<?php echo $color; ?>"/>
                                                <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                <defs>
                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white"/>
                                                        <stop offset="1" stop-color="#A7A7A7"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            
                                            <!-- SVG دوم با لینک -->
                                            <a href="<?php the_permalink(); ?>">
                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                    <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                    <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" fill="<?php echo $color; ?>"/>
                                                    <path d="M17.1664 21.766L28.8088 21.8345C29.7827 21.8402 30.5678 22.6346 30.5621 23.6085C30.5562 24.5822 29.7619 25.3665 28.7881 25.3608L17.1457 25.2923C16.172 25.2866 15.3869 24.4931 15.3924 23.5193C15.3982 22.5454 16.1926 21.7603 17.1664 21.766Z" fill="white" stroke="white" stroke-width="2"/>
                                                    <path d="M24.7758 17.7493L24.7074 29.3916C24.7017 30.3655 23.9073 31.1506 22.9334 31.1449C21.9597 31.139 21.1754 30.3447 21.1811 29.3709L21.2495 17.7285C21.2552 16.7548 22.0488 15.9697 23.0225 15.9753C23.9964 15.981 24.7815 16.7754 24.7758 17.7493Z" fill="white" stroke="white" stroke-width="2"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_3795_1071" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#929292"/>
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear_3795_1071" x1="43.3765" y1="13.4261" x2="4.13105" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#929292"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center">مطلبی یافت نشد.</p>
                <?php endif; ?>
                
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>