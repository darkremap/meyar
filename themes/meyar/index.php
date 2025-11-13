<?php get_header(); ?>

<main >
  <section class="heroSection">
      <div class="container">
        <div class="row">
          <div class="col-md-4 heroSection-content">
            <h1 class="Dana-ExtraBold">توسعــــــه انســانی تعــــــــالی سازمانی</h1>
            <div class="heroSection-content-btns">
                <a class="buttonTroy Dana-Bold meyar-yello-btn" href="#">درخواست دمو</a>
                <a class="mx-3 buttonTroy Dana-Bold meyar-white-btn" href="#">دریافت کاتالوگ</a>
            </div>
          </div>
          <div class="col-md-8 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.gif" alt="">
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
        <div class="row serviseSection-Items">
          <?php for ($i = 0; $i < 12; $i++): ?>
            <div class="col-md-3">
              <div class="serviseCard">
                <div class="serviseContent">
                    <img class="serviseCard-image-f" src="<?php echo get_template_directory_uri(); ?>/assets/images/Sbrain-off.png" alt="">
                    <img class="serviseCard-image-n" src="<?php echo get_template_directory_uri(); ?>/assets/images/servise-time-on.png" alt="">
                    <h5 class="serviseTitle Dana-ExtraBold">جذب و استخدام</h5>
                </div>
              </div>
            </div>
          <?php endfor; ?>  
        </div>
      </div>
  </section>

  <section class="newsSection">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="newsSection-event-card">
            <div class="newsSection-Event">
                <h2 class="mb-3 Dana-Bold">تازه ها</h2>
                <div class="newsSection-Event-items">
                     <?php for ($i = 0; $i < 4; $i++): ?>
                      <div class="newsSection-Event-item">
                        <div class="newsSection-Event-item-title">
                            <h4>خبر شماره یک</h4>
                            <p>حلاسه خبر شماره یک</p>
                        </div>
                        <div class="newsSection-Event-item-icon">
                          <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.62573 2.62573L3.62574 7.62572L8.62573 12.6257" stroke="#20C4F4" stroke-width="4" stroke-linecap="round"/>
                          </svg>
                        </div>
                      </div>
                    <?php endfor; ?>  
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 newsSection-navTable">
           <div class="warpper">
              <input class="radio" id="one" name="group" type="radio" checked>
              <input class="radio" id="two" name="group" type="radio">
              <input class="radio" id="three" name="group" type="radio">
              <div class="tabs">
              <label class="tab Dana-Bold" id="one-tab" for="one">دوره ها</label>
              <label class="tab Dana-Bold" id="two-tab" for="two">رویدادها</label>
              <label class="tab Dana-Bold" id="three-tab" for="three">مقالات</label>
                </div>
              <div class="panels">
              <div class="panel" id="one-panel">
                <div class="panel-title">دوره ها</div>
              </div>
              <div class="panel" id="two-panel">
                <div class="panel-title">رویدادها</div>
              </div>
              <div class="panel" id="three-panel">
                <div class="panel-title">مقالات</div>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div> 
  </section>

  <section class="FAQSection">
      <h1 class="sectionTitle Dana-Black mb-4">سوالات متداول</h1>
      <div class="FAQSection-items container">
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">گروه معيار چه خدماتي ارائه مي دهد؟</h4>
            <div class="FAQSection-item-answer">
                <p>شرکت معيار به عنوان ارائه‌دهنده خدمات روانشناسی صنعتی-سازمانی، با بهره‌گیری از علوم روانشناختی و روش‌های مبتنی بر شواهد و تجربه، به سازمان‌ها در حل چالش‌های منابع انسانی و ساير دپارتمان ها و بهبود عملکرد کمک می‌کند. این خدمات شامل ارزیابی و گزینش کارکنان، توسعه رهبری، تحول فرهنگ سازمانی و افزایش بهره‌وری می‌شود. با استفاده از ابزارهایی مانند آزمون‌های روانسنجی، مصاحبه‌های ساختاریافته و کوچینگ، به سازمان‌ها در ایجاد محیط کاری سالم و اثربخش یاری می‌رسانید. هدف نهایی، همسو کردن سرمایه انسانی با اهداف استراتژیک سازمان و ایجاد مزیت رقابتی پایدار است.</p>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">نحوه دريافت خدمات از گروه معيار چگونه است؟</h4>
            <div class="FAQSection-item-answer">
                <p>برای دریافت خدمات از گروه معیار، می‌توانید از طریق وب‌سایت رسمی مجموعه یا شماره‌های تماس با کارشناسان ما ارتباط برقرار کنید. در گام نخست، یک جلسه مشاوره رایگان برای تحلیل نیازهای سازمان شما برگزار می‌شود. سپس، طرح خدمات سفارشی متناسب با اهداف و بودجه شما طراحی و ارائه می‌گردد. پس از تأیید نهایی و انعقاد قرارداد، اجرای پروژه توسط تیم متخصصان ما آغاز شده و تا دستیابی به نتایج ملموس پشتيباني و همراهی ادامه می‌یابد. برای آغاز همکاری، همین امروز با ما تماس بگیرید.</p>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">آیا خدمات شما برای سازمان‌های کوچک مقياس (٢٠ تا ٩٩ نفر)هم مناسب است؟</h4>
            <div class="FAQSection-item-answer">
                <p>پاسخ: بله. خدمات ما به صورت ماژولار و مقیاس‌پذیر طراحی شده و برای سازمان‌های با هر اندازه و در هر صنعتی قابل تطبیق است.</p>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">چطور مي توانم با معيار همكاري كنم؟</h4>
            <div class="FAQSection-item-answer">
                <p>برای همکاری با گروه معیار، می‌توانید از طریق تلفن، ايميل يا وب‌سایت مجموعه با پر کردن فرم درخواست همكاري در سايت اقدام کنید. کارشناسان ما پس از بررسي رزومه شما و نیاز مجموعه، جلسه اي براي مصاحبه با شما هماهنگ خواهند كرد.</p>
            </div>
        </div>
        <div class="FAQSection-item Dana-DemiBold">
            <h4 class="FAQSection-item-question">چه تفاوتي بين معيار و مجموعه هاي ديگر توسعه كسب و كار وجود دارد؟</h4>
            <div class="FAQSection-item-answer">
                <p>تفاوت اصلی "معیار" با سایر مجموعه‌های توسعه کسب‌وکار در تخصص یکپارچه و منحصربه‌فرد آن در حوزه روانشناسی صنعتی-سازمانی است. برخلایت روش‌های عمومی مشاوره مدیریت، ما با ترکیب دانش روانشناسی، ابزارهای روانسنجی استاندارد و راهکارهای بومی، مانند بازي هاي سازماني به صورت علمی و عمقی به بهبود سرمایه انسانی و فرهنگ سازمانی می‌پردازیم. این رویکرد تضمین می‌کند که تغییرات ایجاد شده نه تنها ملموس، بلکه پایدار و همسو با ویژگی‌های منحصربه‌فرد هر سازمان باشند.</p>
            </div>
        </div>
      </div>
  </section>
  
  <section class="customerSection">
      <h1 class="sectionTitle Dana-Black mb-4">مشتریان</h1>
      <div class="">
          <!-- <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Custumers.png" alt=""> -->
          <div class="customerSection-slider">
            <div class="customerSection-slide-track">
              <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C1.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C2.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C3.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C4.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C6.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C7.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C8.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C9.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C10.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C11.png" alt="">
                </div>
                <div class="customerSection-slide">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/C12.png" alt="">
                </div>
              <?php endfor; ?>  
            </div>
          </div>
      </div>
  </section>


</main>


<?php get_footer(); ?>