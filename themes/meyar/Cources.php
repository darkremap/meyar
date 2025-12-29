<?php
/**
 * Template Name: courses
 */
get_header(); ?>


<section class="courses">
    <div class="c-body">
        <div class="container">
            <div class="row">
                <h1 class="col-md-4 Dana-Black">دوره‌هــای آموزشی</h1>
            </div>
        </div>
        <div class="c-body-image">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/coursesHeroImage.png" alt="">
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
            <?php
                $args = array(
                    'post_type'      => 'course',  // MUST be lowercase
                    'posts_per_page' =>  -1,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC'
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <div class="c-card">
                            <div class="row">
                                <div class="col-md-9 c-card-info">
                                    <div class="c-card-info-title">
                                        <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                        <div class="c-card-actions">
                                            <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                        </div>
                                    </div>
                                    <div class="c-card-info-thicher">
                                        <h2 class="Dana-Bold">
                                            <?php if ( get_field('coursesteachername') ) : ?>
                                                <?php echo get_field('coursesteachername')?>
                                            <?php endif; ?>   
                                        </h2>
                                    </div>
                                    <div class="c-card-info-desc">
                                        <p class="Dana-Regular">
                                            <?php if ( get_field('coursessummary') ) : ?>
                                                <?php echo get_field('coursessummary')?>
                                            <?php endif; ?> 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 c-card-image">
                                    <?php if ( get_field('coursesheroimage') ) : ?>
                                        <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                    <?php endif; ?>   
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
        </div>

    </div>
    <!-- <div class="container c-otherCourses">
         <div class="singleService-pointTitle">
            <span></span>
            <h1 class="singleService-text-title Dana-Black">سایر دوره های آموزشی</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                 <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="col-md-4">
                        <div class="otherService-card"style="background-color: 
                                                            <?php if ($i % 2 == 0) { ?>
                                                                #FDB913
                                                            <?php } else { ?>
                                                                #FFFFFF 
                                                            <?php } ?>
                                                            ">
                            
                            <svg width="83" height="96" viewBox="0 0 83 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.7283 69.1953H75.9227C78.0192 69.1953 79.7394 70.9078 79.7394 73.012V90.2064C79.7394 92.3029 78.0269 94.0231 75.9227 94.0231H58.7283C56.6318 94.0231 54.9116 92.3106 54.9116 90.2064V73.012C54.9116 70.9155 56.6242 69.1953 58.7283 69.1953Z" stroke="
                                                            <?php if ($i % 2 == 0) { ?>
                                                                #FFFFFF 
                                                            <?php } else { ?>
                                                                #FDB913
                                                            <?php } ?>
                                " stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22.5117 62.5292L22.4887 89.1079C22.4887 95.72 35.2443 95.6278 35.1752 89.0081L34.9372 70.7693L34.6377 38.4616M34.9756 56.2012C36.7495 60.8704 39.4066 61.454 41.2881 60.3866C44.3829 58.628 43.3078 54.9418 43.1696 52.039L42.2096 30.7974C41.8794 23.4712 4.15004 24.0164 2.929 30.7206C1.93067 34.8753 1.79244 44.3594 1.67724 51.5167C1.62349 55.0109 0.325653 62.1605 5.64755 61.5999C7.18345 61.5001 8.85758 60.233 10.1017 56.9615M10.4549 38.4539L10.1554 70.7616L9.91735 89.0004C9.84823 95.6201 22.4964 95.7123 22.4964 89.1002M59.1737 35.3514H76.368C78.4646 35.3514 80.1848 37.0639 80.1848 39.1681V56.3625C80.1848 58.459 78.4722 60.1792 76.368 60.1792H59.1737C57.0771 60.1792 55.3569 58.4667 55.3569 56.3625V39.1681C55.3569 37.0716 57.0695 35.3514 59.1737 35.3514ZM22.2583 1.50781C27.3728 1.50781 31.5198 5.65474 31.5198 10.7693C31.5198 14.2251 29.6306 17.2354 26.8199 18.8251C25.4453 19.6314 23.8403 20.0999 22.1277 20.0999C17.0132 20.0999 12.874 15.953 12.874 10.8384C12.874 7.38263 14.7631 4.37227 17.5661 2.78261C18.9408 1.96858 20.5458 1.50781 22.2583 1.50781Z" stroke="#1B3281" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M59.6194 1.50768H76.8138C78.9103 1.50768 80.6305 3.22021 80.6305 5.32439V22.5188C80.6305 24.6153 78.918 26.3355 76.8138 26.3355H59.6194C57.5229 26.3355 55.8027 24.623 55.8027 22.5188V5.31671C55.8027 3.22021 57.5153 1.5 59.6194 1.5V1.50768Z" stroke="
                                                            <?php if ($i % 2 == 0) { ?>
                                                                #FFFFFF 
                                                            <?php } else { ?>
                                                                #FDB913
                                                            <?php } ?>
                                                            " stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M72.8531 49.732L65.3485 42.2274C64.3648 41.2437 62.77 41.2437 61.7863 42.2274C60.8026 43.2111 60.8026 44.806 61.7863 45.7896L69.2908 53.2942C70.2745 54.2779 71.8694 54.2779 72.8531 53.2942C73.8368 52.3105 73.8368 50.7157 72.8531 49.732Z" fill="#1B3281"/>
                                <path d="M65.3515 53.2925L72.8561 45.788C73.8398 44.8043 73.8398 43.2094 72.8561 42.2257C71.8724 41.242 70.2775 41.242 69.2939 42.2257L61.7893 49.7303C60.8056 50.714 60.8056 52.3088 61.7893 53.2925C62.773 54.2762 64.3678 54.2762 65.3515 53.2925Z" fill="#1B3281"/>
                                <path d="M75.2472 76.5139C74.2795 75.5539 72.7129 75.5462 71.753 76.5139L65.6094 82.6575L62.8985 79.9466C62.4301 79.4781 61.808 79.2247 61.1476 79.2247C60.4872 79.2247 59.8651 79.4858 59.3967 79.9466C58.9282 80.415 58.6748 81.0371 58.6748 81.6975C58.6748 82.358 58.9359 82.98 59.3967 83.4484L63.8508 87.9026C64.3192 88.371 64.9413 88.6244 65.6017 88.6244C66.2621 88.6244 66.8842 88.3633 67.3526 87.9026L75.2472 80.008C76.2071 79.0404 76.2071 77.4738 75.2472 76.5139Z" fill="
                                                            <?php if ($i % 2 == 0) { ?>
                                                                #FFFFFF 
                                                            <?php } else { ?>
                                                                #FDB913
                                                            <?php } ?>
                                                            "/>
                                <path d="M76.1378 8.21991C75.1702 7.25997 73.6036 7.25229 72.6436 8.21991L66.5 14.3635L63.7892 11.6526C63.3207 11.1842 62.6987 10.9308 62.0382 10.9308C61.3778 10.9308 60.7558 11.1919 60.2873 11.6526C59.8189 12.1211 59.5654 12.7431 59.5654 13.4036C59.5654 14.064 59.8265 14.686 60.2873 15.1545L64.7414 19.6086C65.2099 20.0771 65.8319 20.3305 66.4923 20.3305C67.1528 20.3305 67.7748 20.0694 68.2433 19.6086L76.1378 11.7141C77.0977 10.7465 77.0977 9.17984 76.1378 8.21991Z" fill="
                                                            <?php if ($i % 2 == 0) { ?>
                                                                #FFFFFF 
                                                            <?php } else { ?>
                                                                #FDB913
                                                            <?php } ?>
                                                            "/>
                            </svg>

                            <h1 class="Dana-ExtraBlack">رهبری و توسعه فردی</h1>
                        </div>
                    </div>
                <?php endfor; ?> 
            </div>
        </div>
    </div> -->
</section>



<?php get_footer(); ?>