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
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/telegram.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/wharsapp.png" alt="">
                        </a>
                        <a href="#">
                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="">
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
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
    <!-- baraye menue mobyle -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- بخش ۱: کنترل منوی اصلی ---
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const body = document.body;

        if (menuToggle && navMenu) {
            menuToggle.addEventListener('click', function() {
                menuToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
                body.classList.toggle('menu-open');
            });
        }

        // --- بخش ۲: کنترل زیرمنوها (کد جدید) ---
        // پیدا کردن تمام آیتم‌های منویی که فرزند (زیرمنو) دارند
        const parentMenuItems = document.querySelectorAll('.nav-menu .menu-item-has-children');

        parentMenuItems.forEach(function(item) {
            // پیدا کردن لینک اصلی داخل آیتم منو
            const link = item.querySelector('a');

            // اضافه کردن رویداد کلیک به لینک
            link.addEventListener('click', function(event) {
                // جلوگیری از رفتن به صفحه لینک
                event.preventDefault();

                // پیدا کردن زیرمنوی مربوط به این آیتم
                const subMenu = item.querySelector('.sub-menu, .children');

                if (subMenu) {
                    // بستن تمام زیرمنوهای دیگر برای تمیز نگه داشتن رابط کاربری
                    parentMenuItems.forEach(function(otherItem) {
                        if (otherItem !== item) {
                            const otherSubMenu = otherItem.querySelector('.sub-menu, .children');
                            if (otherSubMenu) {
                                otherSubMenu.classList.remove('active');
                            }
                        }
                    });

                    // باز یا بسته کردن زیرمنوی فعلی
                    subMenu.classList.toggle('active');
                }
            });
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
                // Also, set the icons for the first item
                const icon1 = item.querySelector(".spd-parts-items-title-body-Icon2");
                const icon2 = item.querySelector(".spd-parts-items-title-body-Icon1");
                icon1.style.display = "none";
                icon2.style.display = "block";
            }
            else{
                const icon1 = item.querySelector(".spd-parts-items-title-body-Icon2");
                const icon2 = item.querySelector(".spd-parts-items-title-body-Icon1");
                icon2.style.display = "none";
                icon1.style.display = "block";
            }

        });

        items.forEach(item => {
            item.querySelector(".spd-parts-items-title-body").addEventListener("click", () => {
                items.forEach(i => {
                    i.querySelector(".spd-parts-items-body").classList.remove("open");
                    i.querySelector(".spd-parts-items-title-number").classList.remove("open");
                    // Also reset the icons for all items
                    const icon1 = i.querySelector(".spd-parts-items-title-body-Icon2");
                    const icon2 = i.querySelector(".spd-parts-items-title-body-Icon1");
                    icon1.style.display = "block";
                    icon2.style.display = "none";
                });
                item.querySelector(".spd-parts-items-body").classList.add("open");
                item.querySelector(".spd-parts-items-title-number").classList.add("open");
                // Set the icons for the clicked item
                const icon1 = item.querySelector(".spd-parts-items-title-body-Icon2");
                const icon2 = item.querySelector(".spd-parts-items-title-body-Icon1");
                icon1.style.display = "none";
                icon2.style.display = "block";
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.c-filter-form-control');
            const courseCards = document.querySelectorAll('.c-card');
            const allCoursesTab = document.getElementById('five');
            const firstTab = document.getElementById('one');

            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase().trim();

                    // 🔹 اگر سرچ خالی شد → برگرد به تب اول
                    if (searchTerm.length === 0) {
                        firstTab.checked = true;
                    } 
                    // 🔹 اگر چیزی تایپ شد → برو روی تب کل دوره‌ها
                    else {
                        allCoursesTab.checked = true;
                    }

                    courseCards.forEach(card => {
                        const title = card.querySelector('.c-card-info-title h1')?.textContent.toLowerCase() || '';
                        const description = card.querySelector('.c-card-info-desc p')?.textContent.toLowerCase() || '';

                        if (title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.querySelectorAll(".iconbox-img a").forEach(function (btn) {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();

                    const popup = this.closest(".services-item-card-left")
                                    .querySelector(".showTizerPopup");

                    if (!popup) return;

                    const iframe = popup.querySelector("iframe");
                    const loader = popup.querySelector(".popup-loader");

                    // فعال‌سازی loader
                    if (loader) loader.classList.add("active");

                    // ذخیره src فقط یکبار
                    if (iframe && !iframe.dataset.src) {
                        iframe.dataset.src = iframe.src;
                    }

                    // set src (شروع لود)
                    if (iframe && iframe.dataset.src) {
                        iframe.src = iframe.dataset.src;
                    }

                    // وقتی ویدیو لود شد
                    iframe.onload = function () {
                        if (loader) loader.classList.remove("active");
                    };

                    popup.classList.add("active");
                });
            });

            document.querySelectorAll(".showTizerPopup").forEach(function (popup) {

                popup.addEventListener("click", function (e) {
                    if (
                        e.target.classList.contains("popup-overlay") ||
                        e.target.closest(".popup-close")
                    ) {
                        closePopup(popup);
                    }
                });

            });

            function closePopup(popup) {
                popup.classList.remove("active");

                const iframe = popup.querySelector("iframe");
                const loader = popup.querySelector(".popup-loader");

                if (iframe) iframe.src = "";
                if (loader) loader.classList.add("active"); // ریست برای دفعه بعد
            }

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const cards = document.querySelectorAll('[id^="c-"]');
            const forms = document.querySelectorAll('[id^="f-"]');
            const formSection = document.querySelector('.collaboration-form');
            const formTitle = document.getElementById('form-title');

            function hideAllForms() {
                forms.forEach(form => form.classList.remove('active'));
            }

            // حالت پیش‌فرض
            hideAllForms();
            document.getElementById('f-117').classList.add('active');

            cards.forEach(card => {
                card.addEventListener('click', function () {

                    const formId = this.id.replace('c-', 'f-');
                    const cardTitle = this.querySelector('.collaboration-card h1').innerText;

                    hideAllForms();

                    const targetForm = document.getElementById(formId);
                    if (targetForm) {
                        targetForm.classList.add('active');
                    }

                    // تغییر عنوان فرم
                    if (formTitle && cardTitle) {
                        formTitle.innerText = cardTitle;
                    }

                    // اسکرول نرم
                    formSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });

        });
    </script>




</body>
</html>