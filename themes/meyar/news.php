<?php
/**
 * Template Name: news
 */
get_header(); ?>


<section class="basePages">
    <div class="container basePages-header">
        <div class="row contactUs-header">
            <div class="col-md-6 contactUs-title">
                <h1 class="Dana-Black">اخبار سازمانی</h1>
                <h2 class="Dana-Regular">News</h2>
            </div>
            <div class="col-md-6 contactUs-image">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/contactUs.png" alt="">
            </div>
        </div>

        <div class="row basePages-cards">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="col-md-12 basePage-item">
                    <div class="basePages-card-shadow"></div>
                    <div class="basePages-card">
                        <div class="basePages-card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servise-time-on.png" alt="">
                                </div>
                                <div class="col-10 basePages-card-content">
                                    <h1 class="mb-4 Dana-Black basePages-card-title">نگاهی انتقادی بر سیاست های وزارت بهداشت، درمان و آموزش پزشکی در جهت عدم گسترش مجلات فارسی زبان</h1>
                                    <p class="Dana-Regular basePages-card-des">امروزه معیار تعیین جایگاه و اقتدار جهانی کشورها و اساس توسعه همه جانبه آنها میزان تولید دانش و دستاوردهای پژوهشی آنها در سطح رقابت جهانی است. با اطمینان میتوان ادعا کرد بین پژوهش و فناوری و میزان پیشرفت و توسعه پایدار در کشور رابطه مستقیم وجود دارد. اهمیت دادن به امر تحقیقات و افزایش فعالیتهای پژوهشی در کشور سبب توسعه و پیشرفت گردیده, خودکفایی و استقلال واقعی را برای آن مملکت به دنبال دارد. </p>
                                </div>
                            </div>
                        </div>
                        <div class="basePages-card-icon">
                            <div class="bacePages-card-image"> 
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8818 6.10352e-05C13.9815 0.012608 15.6735 1.72455 15.6611 3.82428L15.6357 8.03619L19.8447 8.06158C21.9445 8.07393 23.6372 9.78606 23.625 11.8858C23.6127 13.9857 21.8997 15.6784 19.7998 15.6661L15.5918 15.6407L15.5674 19.8438C15.555 21.9435 13.8428 23.6362 11.7432 23.6241C9.64339 23.6117 7.95071 21.8996 7.96289 19.7999L7.9873 15.5958L3.78027 15.5714C1.68041 15.559 -0.0123339 13.847 0 11.7471C0.0123782 9.64731 1.72536 7.95549 3.8252 7.96783L8.03125 7.99225L8.05664 3.77936C8.0691 1.67961 9.78205 -0.0122802 11.8818 6.10352e-05Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endfor; ?> 
        </div>
    </div>

</section>


<?php get_footer(); ?>