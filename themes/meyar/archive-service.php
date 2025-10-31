<?php get_header(); ?>

<main id="primary" class="site-main">

    <div class="services-main">
        <div class="services-head">
            <div class="container">
                 <div class="row services-head-right">
                    <div class="col-md-6">
                        <h1 class="Dana-Black">فرآیندهای سازمانی</h1>
                        <h2 class="Dana-Regular">organizational processes</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="services-items">
            <span class="services-items-line"></span>
            <div class="container">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <div class="row margin-mines">
                        <div class="col-md-6">
                            <?php if ($i % 2 == 0) { ?>
                                <div class="services-item">
                                    <span class="services-item-line"></span>
                                    <span class="services-item-point" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                    </span>
                                    <div class="services-item-card">
                                        <div class="services-item-card-right" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                            <h1 class="Dana-ExtraBold">01</h1>
                                            <h2 class="mt-3 Dana-ExtraBlack">جذب و استخدام</h2>
                                        </div>
                                        <div class="services-item-card-left">
                                            <p class="Dana-Regular">ارزیابی و گزینش کارکنان فرآیندی نظام‌مند برای انتخاب بهترین فرد متناسب با شغل است که با تحلیل شغل (تعیین وظایف و شایستگی‌های مورد نیاز) آغاز می‌شود.</p>
                                            <div class="services-item-card-left-icons">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-checkbox.png" alt="Meyar">
                                                <div class="services-item-card-left-iconbox">
                                                    <div class="iconbox-img">   
                                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                            <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)"/>
                                                            <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z"
                                                             fill="
                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                     #FDB913
                                                                <?php } else { ?>
                                                                     #75EABA 
                                                                <?php } ?>
                                                            "/>
                                                            <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <defs>
                                                            <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#A7A7A7"/>
                                                            </linearGradient>
                                                            <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#A7A7A7"/>
                                                            </linearGradient>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                        <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                        <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" 
                                                            fill="
                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                     #FDB913
                                                                <?php } else { ?>
                                                                     #75EABA 
                                                                <?php } ?>
                                                            "/>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <?php if ($i % 2 != 0) { ?>
                                <div class="services-item leftSide-card">
                                    <span class="services-item-line"></span>
                                    <span class="services-item-point" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                    </span>
                                    <div class="services-item-card">
                                        <div class="services-item-card-left">
                                            <p class="Dana-Regular">ارزیابی و گزینش کارکنان فرآیندی نظام‌مند برای انتخاب بهترین فرد متناسب با شغل است که با تحلیل شغل (تعیین وظایف و شایستگی‌های مورد نیاز) آغاز می‌شود.</p>
                                            <div class="services-item-card-left-icons">
                                                <div class="services-item-card-left-iconbox">
                                                    <div class="iconbox-img">   
                                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                            <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)" fill="url(#paint1_linear_3795_1066)"/>
                                                            <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" 
                                                            fill="
                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                     #FDB913
                                                                <?php } else { ?>
                                                                     #75EABA 
                                                                <?php } ?>
                                                            "/>
                                                            <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <defs>
                                                            <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#A7A7A7"/>
                                                            </linearGradient>
                                                            <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="#A7A7A7"/>
                                                            </linearGradient>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                        <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                        <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" 
                                                            fill="
                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                     #FDB913
                                                                <?php } else { ?>
                                                                     #75EABA 
                                                                <?php } ?>
                                                            "/>
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
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-checkbox.png" alt="Meyar">
                                            </div>
                                        </div>
                                        <div class="services-item-card-right" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                            <h1 class="Dana-ExtraBold">01</h1>
                                            <h2 class="mt-3 Dana-ExtraBlack">جذب و استخدام</h2>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php endfor; ?> 
            </div>
        </div>



        <!-- <?php if ( have_posts() ) : ?>
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
        <?php endif; ?> -->
    </div>
</main>

<?php get_footer(); ?>
