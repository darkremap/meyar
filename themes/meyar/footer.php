        </div><!-- .container -->
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <!-- <?php if (is_active_sidebar('footer-widgets')) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            <?php endif; ?> -->
            
            <div class="row">
                <div class="col-md-5 footer-right">
                    <h5 class="mb-3 Dana-Bold">معیار در یک نگاه</h5>
                    <p class="Dana-Regular">معیار به‌عنوان یک بانک جامع خدمات روانشناختی، مدیریت سازمانی و منابع انسانی، مجموعه‌ای متشکل از بیش از ۵۰ کارگروه تخصصی و سازمانی است که شامل مشاوران و متخصصان حوزه روانشناسی بالینی و صنعتی-سازمانی، مهندسان صنایع، اساتید دانشگاه، روان‌سنجان، کارشناسان بهداشت و ایمنی و سایر حرفه‌ای‌های مرتبط می‌باشد.
                        معيار در يك نگاه
                        معیار با تکیه بر دانش فنی، علمی و سال‌ها تجربه، هدف دارد شبکه‌ای تخصصی و یکپارچه ایجاد کند تا سازمان‌ها بتوانند تمامی نیازهای خود در این حوزه‌ها را برطرف کنند و نیازی به مراجعه به منابع و سایت‌های مختلف برای دریافت خدمات متنوع نداشته باشند.
                        در مجموعه معیار، ما فضایی فراهم کرده‌ایم تا شما با اطمینان خاطر بتوانید به آرمان‌ها و اهداف سازمانی خود دست یابید.
                    </p>
                </div>
                <div class="col-md-3">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'footer-midel Dana-Regular',
                            'container'      => false,
                            'depth'          => 1,
                        ));
                        ?>
                </div>
                <div class="col-md-4 footer-left">
                    <div class="footer-left-lodacion">
                         <h5 class="Dana-Bold">
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locationIcon.png" alt="">
                                </span>
                                یـوسف آبـاد، بـالاتــر از پمپ بنــزیـن، (روبه روی بانک کارآفرین/جنب نوین چرم) ساختـمان پزشـکان ۵۰۱، طبقه ۴، واحد ۱۷
                        </h5>
                    </div>
                    <div class="footer-left-phon">
                         <h5 class="Dana-Bold">
                                <span>
                                    <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/PhoneIcone.png" alt="">
                                </span>
                               ۰۲۱-۲۲۲ ۳۳ ۴۴
                        </h5>
                    </div>
                    <div class="footer-left-media">
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/InstagramLogo.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/InstagramLogo.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/InstagramLogo.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/InstagramLogo.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/InstagramLogo.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyRight">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </div>
            
            
        </div>
    </footer>

    
    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.FAQSection-item').forEach(item => {
        item.addEventListener('click', () => {
            // Close all others
            document.querySelectorAll('.FAQSection-item').forEach(i => {
            if (i !== item) i.classList.remove('active');
            });
            // Toggle current
            item.classList.toggle('active');
        });
        });
    </script>
    <script>
        // Add scroll event listener to change header background
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.site-header');
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
    </script>

    <script>
        const items = document.querySelectorAll(".spd-parts-items");
        items.forEach((item, index) => {
            if (index === 0) {
                item.querySelector(".spd-parts-items-body").classList.add("open");
                item.querySelector(".spd-parts-items-title-number").classList.add("open");
            }
        });

        items.forEach(item => {
            item.querySelector(".spd-parts-items-title-body").addEventListener("click", () => {
                items.forEach(i => {
                    i.querySelector(".spd-parts-items-body").classList.remove("open");
                    i.querySelector(".spd-parts-items-title-number").classList.remove("open");

                });
                item.querySelector(".spd-parts-items-body").classList.add("open");
                item.querySelector(".spd-parts-items-title-number").classList.add("open");

            });
        });

    </script>
</body>
</html>