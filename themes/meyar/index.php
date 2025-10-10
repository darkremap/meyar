<?php get_header(); ?>

<main >
  <section class="heroSection">
      <div class="container">
        <div class="row">
          <div class="col-md-4 heroSection-content">
            <h1 class="Dana-ExtraBold">توسعه انسانی تعالی سازمانی</h1>
            <div class="heroSection-content-btns">
                <a class="buttonTroy Dana-Bold meyar-yello-btn" href="#">درخواست دمو</a>
                <a class="mx-3 buttonTroy Dana-Bold meyar-white-btn" href="#">دریافت کاتالوگ</a>
            </div>
          </div>
          <div class="col-md-8 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="">
          </div>
        </div>
      </div>
  </section>

  
  <section class="whySection" >
     <h1 class="Dana-Black">چرا معیار</h1>
     <div class="container">
        <div class="row whyCards-container">
            <div class="col-md-2 whyCard">
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-network-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-network-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title Dana-DemiBold">یکپارچگی خدمات</h3>
                </div>
            </div>
            <div class="col-md-2 whyCard">
              <p class="boarder-why"></p>
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp-gear-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp-gear-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title Dana-DemiBold">بهره گیری از دانش روز وتجربه های عملیاتی</h3>
                </div>
            </div>
            <div class="col-md-2 whyCard">
              <p class="boarder-why"></p>
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp-puzzle-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp-puzzle-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title Dana-DemiBold">طراحی راهکارهای سفارشی برای هر سازمان</h3>
                </div>
            </div>
            <div class="col-md-2 whyCard">
              <p class="boarder-why"></p>
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-shield-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-shield-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title px-5 Dana-DemiBold">پشتیبانی مستمر و حرفه ای </h3>
                </div>
            </div>
            <div class="col-md-2 whyCard">
              <p class="boarder-why"></p>
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-professional-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-professional-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title Dana-DemiBold">تمرکز بر توسعه پایدار و ارزشهای سازمانی</h3>
                </div>
            </div>
            <div class="col-md-2 whyCard">
              <p class="boarder-why"></p>
                <!-- <div class="whyCard-dot"></div> -->
                <div class="whyCard-content">
                    <div class="whyCard-Icon">
                        <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-star-off.png" alt="">
                        <img class="whyCard-image-h" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamps-star-on.png" alt="">
                    </div>
                    <h3 class="whyCard-title px-5 Dana-DemiBold">جامعیت و تنوع تحصص ها</h3>
                </div>
            </div>
        </div> 
      </div>     
  </section>

  <section class="serviseSection">
      <h1 class="sectionTitle Dana-Black">ارائه خدمات</h1>
      <div class="container">
        <div class="row">
          <?php for ($i = 0; $i < 12; $i++): ?>
            <div class="col-md-3">
              <div class="serviseCard">
                <div class="serviseContent">
                    <img class="whyCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/Sbrain-off.png" alt="">
                    <h5 class="serviseTitle Dana-ExtraBold">جذب و استخدام</h5>
                </div>
              </div>
            </div>
          <?php endfor; ?>  
        </div>
      </div>
  </section>

  <section class="newsSection">

  </section>

  <section class="FAQSection">
      <h1 class="sectionTitle Dana-Black mb-4">سوالات متداول</h1>
      <div class="FAQSection-items container">
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">نحوه دريافت خدمات از گروه معيار چگونه است؟</h4>
            <div class="mt-4 FAQSection-item-answer">
                <p>اگر پاسخ های دریافتی شما با نوع سبک سوالات مطرح شده مطابقت نداشته باشند، شکست خواهید خورد. در واقع منظور این است که تصور نمایید شخصی از شما سوال پرسیده است که نام شما چیست؟ شما به جای اینکه عنوان کنید نام من سارا است، بیان می دارید، مردم من را با نام سارا صدا می زنند..</h4>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">نحوه دريافت خدمات از گروه معيار چگونه است؟</h4>
            <div class="mt-4 FAQSection-item-answer">
                <p>اگر پاسخ های دریافتی شما با نوع سبک سوالات مطرح شده مطابقت نداشته باشند، شکست خواهید خورد. در واقع منظور این است که تصور نمایید شخصی از شما سوال پرسیده است که نام شما چیست؟ شما به جای اینکه عنوان کنید نام من سارا است، بیان می دارید، مردم من را با نام سارا صدا می زنند..</h4>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">نحوه دريافت خدمات از گروه معيار چگونه است؟</h4>
            <div class="mt-4 FAQSection-item-answer">
                <p>اگر پاسخ های دریافتی شما با نوع سبک سوالات مطرح شده مطابقت نداشته باشند، شکست خواهید خورد. در واقع منظور این است که تصور نمایید شخصی از شما سوال پرسیده است که نام شما چیست؟ شما به جای اینکه عنوان کنید نام من سارا است، بیان می دارید، مردم من را با نام سارا صدا می زنند..</h4>
            </div>
        </div>
      </div>
  </section>
  
  <section class="cusstomerSection">
      <h1 class="sectionTitle Dana-Black mb-4">مشتریان</h1>
      <div class="container">
          <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Custumers.png" alt="">
      </div>
  </section>


</main>


<?php get_footer(); ?>