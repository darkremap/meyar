<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>

<body>

<!-- Custom Navigation -->
<header class="site-header">
    <div class="">
        <div class="container">
            <div class="row header-container">
                <div class="col-md-2 header-branding">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="site-titles">
                        <?php if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        <?php else : ?>
                            <p class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <p class="site-description"><?php bloginfo('description'); ?></p>
                    </div>
                </div>

                <nav class="col-md-8 main-navigation" id="main-navigation">
                    <button class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
                        <span class="menu-toggle-bar"></span>
                        <span class="menu-toggle-bar"></span>
                        <span class="menu-toggle-bar"></span>
                        <span class="screen-reader-text">Menu</span>
                    </button>
                    
                    <div class="header-homeIcon">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homeIcon.png" alt="Meyar">
                        </a>
                    </div>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu base',
                        'container'      => false,
                        'fallback_cb'    => 'wp_page_menu',
                        'depth'          => 3
                    ));
                    ?>
                </nav>

                <div class="col-md-2 d-flex justify-content-end">
                    <button class="col-md-2 header-container-btn buttonTroy base" >تماس با ما</button>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="content" class="site-content">
    <div class="container">