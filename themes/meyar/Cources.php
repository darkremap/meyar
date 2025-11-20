<?php
/**
 * Template Name: courses
 */
get_header(); ?>


<section class="courses">
    <div class="c-body">
        <div class="container">
            <div class="row">
                <h1 class="col-md-4 Dana-Black">دوره‌هــای رهـبــری و تـوسـعـه ســـازمــانی</h1>
            </div>
        </div>
    </div>
    <div class="container c-filter">

    </div>
    <div class="container c-cards">
        <div class="row">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <div class="col-md-12 c-card">
                    <div class="row">
                        <div class="col-md-9 c-card-info">
                            <div class="c-card-info-title">
                                <h1 class="Dana-Black">عنوان</h1>
                                <div class="c-card-actions">
                                    <a class="Dana-Bold meyar-orange-btn" href="#">مشاهده دوره</a>
                                </div>
                            </div>
                            <div class="c-card-info-desc">
                                <p class="Dana-Regular">آنچه باید بدان توجه کنیم این است که تفکر سیستمی بیش از آنکه مجموعه‌ای از ابزارها و روش‌ها باشد، یک فلسفه زیربنایی است. بسیاری از ما به امید حل مسائل اغلب تجاری‌مان دست به دامن ابزارهای رایج در تفکر سیستمی می‌شویم. </p>
                            </div>
                        </div>
                        <div class="col-md-3 c-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-checkbox.png" alt="Meyar">
                        </div>
                    </div>
                </div>
            <?php endfor; ?> 
        </div>
    </div>
</section>



<?php get_footer(); ?>