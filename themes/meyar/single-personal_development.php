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
            <div class="spd-content-text-title">
                <span class="titlePoint"></span>
                <h1 class="Dana-Black" >آزمونها</h1>    
            </div>
            <!-- bayad matn bashad ba ghabliyat text ya list ya ... -->
            <p class="Dana-Medium">ارزیابی و گزینش کارکنان فرآیندی نظام‌مند برای انتخاب بهترین فرد متناسب با شغل است که با تحلیل شغل (تعیین وظایف و شایستگی‌های مورد نیاز) آغاز می‌شود و شامل سه مرحله اصلی  غربالگری اولیه (بررسی مدارک)، ارزیابی تخصصی (آزمون‌های روانسنجی، مصاحبه رفتاری و تمرینات شبیه‌سازی شده) و تصمیم‌گیری نهایی می‌گردد.  این فرآیند با هدف کاهش خطای استخدام، افزایش انطباق شغلی و پیش‌بینی موفقیت شغلی طراحی می‌شود و از ابزارهایی مانند مصاحبه‌های ساختاریافته، تست‌های شخصیت و مراکز ارزیابی استفاده می‌کند تا همزمان مهارت‌های سخت (تخصصی) و مهارت‌های نرم (ارتباطی) داوطلبان را بسنجد. ما به شما کمک می کنیم تا چرخه درست مدیریت منابع انسانی از مرحله جذب تا مرحله ارزیابی عملکرد  که منجر به افزایش بهره‌وری و در عین حال رضایت پرسنل می‌گردد و  نقش به‌سزایی در موفقیت سازمان‌ها در زمان کنونی و تبدیل آن‌ها به سازمان پیشرو در صنعت خود دارد، شکل بگیرد</p>
        </div>
    </section>
    <section class="container spd-parts">
        <div class="spd-parts-items">
            <div class="spd-parts-items-title">
                <div class="Dana-Bold spd-parts-items-title-number">01</div>
                <div class="Dana-Bold spd-parts-items-title-body">آزمونهای شخصیت</div>
                <div class="spd-dashLine"></div>
                <div class="spd-dashPoint"></div>
            </div>
            <div class="spd-parts-items-content">
                ارزیابی و گزینش کارکنان فرآیندی نظام‌مند برای انتخاب بهترین فرد متناسب با شغل است که با تحلیل شغل (تعیین وظایف و شایستگی‌های مورد نیاز) آغاز می‌شود و شامل سه مرحله اصلی  غربالگری اولیه (بررسی مدارک)، ارزیابی تخصصی (آزمون‌های روانسنجی، مصاحبه رفتاری و تمرینات شبیه‌سازی شده) و تصمیم‌گیری نهایی می‌گردد.  این فرآیند با هدف کاهش خطای استخدام، افزایش انطباق شغلی و پیش‌بینی موفقیت شغلی طراحی می‌شود و از ابزارهایی مانند مصاحبه‌های ساختاریافته، تست‌های شخصیت و مراکز ارزیابی استفاده می‌کند تا همزمان مهارت‌های سخت (تخصصی) و مهارت‌های نرم (ارتباطی) داوطلبان را بسنجد. ما به شما کمک می کنیم تا چرخه درست مدیریت منابع انسانی از مرحله جذب تا مرحله ارزیابی عملکرد  که منجر به افزایش بهره‌وری و در عین حال رضایت پرسنل می‌گردد و  نقش به‌سزایی در موفقیت سازمان‌ها در زمان کنونی و تبدیل آن‌ها به سازمان پیشرو در صنعت خود دارد، شکل بگیرد
            </div>
            <div class="spd-parts-item">
                <div class="row">
                    <?php for ($i = 0; $i < 7; $i++): ?>
                        <div class="mb-4 col-md-3">
                            <div class="spd-parts-item-card">
                                <h1 class="Dana-DemiBold">آزمون میلون MCMI</h1>
                                <p class="Dana-DemiBold">شـامل شاخـص‌های تغیـیـر‌دهنـده افشاگری مطلوبیت، تحقیر و ...</p>
                            </div>
                        </div>
                    <?php endfor; ?> 
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>