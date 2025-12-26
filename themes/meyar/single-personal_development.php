<?php
/**
 * The template for displaying single Personal Development posts
 */
get_header(); ?>
<div class="singlePersonalDevelopment">
    <section class="container spd-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/singlePersonalDevelopment.png" alt="Meyar">
    </section>
    <section class="container spd-content">
        <div class="spd-content-text">
            <div class="singleService-pointTitle">
                <div class="singleService-pointTitle-farsi">
                    <span></span>
                    <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>
                </div>
                <h2 class="Dana-Bold">
                    <?php if ( get_field('personaldevelopmentsenglishtitle') ) : ?>
                        <?php echo get_field('personaldevelopmentsenglishtitle'); ?>
                    <?php endif; ?>
                </h2>
            </div>
            <!-- bayad matn bashad ba ghabliyat text ya list ya ... -->
            <p class="Dana-Medium"> <?php the_excerpt(); ?></p>
        </div>
    </section>
    <section class="container spd-parts">
        <?php for ($j = 0; $j < 5; $j++): ?>
            <div class="spd-parts-items">
                <div class="spd-parts-items-title">
                    <div class="Dana-Bold spd-parts-items-title-number">0<?php echo $j +1 ?></div>
                    <div class="Dana-Bold spd-parts-items-title-body">
                        <p class="m-0">آزمونهای شخصیت</p>                       
                        <svg class="spd-parts-items-title-body-Icon1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13" cy="13" r="13" fill="#75EABA"/>
                            <path d="M9 16.5356L12.5355 20.0712L16.0711 16.5356" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 9.53564L12.5355 13.0712L16.0711 9.53564" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <svg class="spd-parts-items-title-body-Icon2" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13" cy="13" r="13" fill="#75EABA"/>
                            <path d="M10.0361 9.5L6.5006 13.0355L10.0361 16.5711" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                            <path d="M17.0361 9.5L13.5006 13.0355L17.0361 16.5711" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="spd-dashLine"></div>
                    <div class="spd-dashPoint"></div>
                </div>
                <div class="spd-parts-items-body">
                    <!-- bayad matn bashad ba ghabliyat text ya list ya ... -->
                    <div class="Dana-Medium spd-parts-items-content">
                        ارزیابی و گزینش کارکنان فرآیندی نظام‌مند برای انتخاب بهترین فرد متناسب با شغل است که با تحلیل شغل (تعیین وظایف و شایستگی‌های مورد نیاز) آغاز می‌شود و شامل سه مرحله اصلی  غربالگری اولیه (بررسی مدارک)، ارزیابی تخصصی (آزمون‌های روانسنجی، مصاحبه رفتاری و تمرینات شبیه‌سازی شده) و تصمیم‌گیری نهایی می‌گردد.  این فرآیند با هدف کاهش خطای استخدام، افزایش انطباق شغلی و پیش‌بینی موفقیت شغلی طراحی می‌شود و از ابزارهایی مانند مصاحبه‌های ساختاریافته، تست‌های شخصیت و مراکز ارزیابی استفاده می‌کند تا همزمان مهارت‌های سخت (تخصصی) و مهارت‌های نرم (ارتباطی) داوطلبان را بسنجد. ما به شما کمک می کنیم تا چرخه درست مدیریت منابع انسانی از مرحله جذب تا مرحله ارزیابی عملکرد  که منجر به افزایش بهره‌وری و در عین حال رضایت پرسنل می‌گردد و  نقش به‌سزایی در موفقیت سازمان‌ها در زمان کنونی و تبدیل آن‌ها به سازمان پیشرو در صنعت خود دارد، شکل بگیرد
                    </div>
                    <div class="spd-parts-item">
                        <div class="row">
                            <?php for ($i = 0; $i < 7; $i++): ?>
                                <div class="mb-4 col-md-3">
                                    <div class="spd-parts-item-card">
                                        <div class="spd-parts-item-card-title">     
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.03613 0C7.1026 0.006402 7.96232 0.875879 7.95605 1.94238L7.94336 4.08203L10.0801 4.09473C11.1467 4.101 12.0063 4.97052 12 6.03711C11.9937 7.10355 11.1241 7.96319 10.0576 7.95703L7.91992 7.94434L7.9082 10.0791C7.90194 11.1455 7.03222 12.0051 5.96582 11.999C4.89925 11.9928 4.03967 11.1232 4.0459 10.0566L4.05762 7.9209L1.91992 7.90918C0.853662 7.90268 -0.0060603 7.03307 0 5.9668C0.00626477 4.90021 0.876773 4.04061 1.94336 4.04688L4.08105 4.05859L4.09375 1.91992C4.10001 0.853336 4.96955 -0.00626873 6.03613 0Z" fill="#FDB913"/>
                                            </svg>
                                            <h1 class="Dana-DemiBold">آزمون میلون MCMI</h1>
                                        </div>
                                        <p class="Dana-DemiBold">شـامل شاخـص‌های تغیـیـر‌دهنـده افشاگری مطلوبیت، تحقیر و ...</p>
                                    </div>
                                </div>
                            <?php endfor; ?> 
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?> 
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
        <div class="singleService-pointTitle">
            <span class="titlePoint"></span>
            <h1 class="singleService-text-title Dana-Black">سایر خدمات در حوزه توسعه فردی و سازمانی</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                <?php
                $current_post_id = get_the_ID(); // دریافت ID پست فعلی
                $args = array(
                    'post_type'      => 'service',  // MUST be lowercase
                    'posts_per_page' => -1,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC',
                    'post__not_in'   => array($current_post_id) // حذف پست فعلی از نتایج
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <div class="col-md-2 col-4">
                            <div class="otherService-card">
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