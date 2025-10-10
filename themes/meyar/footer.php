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
                <div class="col-md-4">
                    

                </div>
                <div class="col-md-4">
                    <div class="site-info">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => ' Dana-Regular',
                            'container'      => false,
                            'depth'          => 1,
                        ));
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    
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
</body>
</html>