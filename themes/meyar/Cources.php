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
        <div class="row">
            <div class="c-filter-search">
                <div class="c-filter-input-group ">
                    <h2 class="Dana-Bold">جستجو</h2>
                    <input type="text" class="c-filter-form-control"/>
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19.799" cy="13.435" r="8" transform="rotate(45 19.799 13.435)" stroke="#999999" stroke-width="3"/>
                        <rect x="13.4347" y="17.6777" width="4" height="11" rx="2" transform="rotate(45 13.4347 17.6777)" fill="#999999"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-cards">
        <div class="row">
            <?php for ($i = 0; $i < 12; $i++): ?>
                <div class="col-md-12 c-card">
                    <div class="row">
                        <div class="col-md-9 c-card-info">
                            <div class="c-card-info-title">
                                <h1 class="Dana-Black">عنوان <?php echo $i  ?></h1>
                                <div class="c-card-actions">
                                    <a class="Dana-Bold meyar-orange-btn" href="#">مشاهده دوره</a>
                                </div>
                            </div>
                            <div class="c-card-info-thicher">
                                <h2 class="Dana-Bold">دکتر مهدی مسلمی فر</h2>
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
    <div class="container c-otherCourses">
         <div class="singleService-pointTitle">
            <span></span>
            <h1 class="singleService-text-title Dana-Black">سایر دوره های آموزشی</h1>
        </div>
    </div>
</section>



<?php get_footer(); ?>