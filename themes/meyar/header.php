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
                    <div class="site-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoLight.png" alt="Mwyar">
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
                            <svg fill="#ffffffff" width="24px" height="24px" viewBox="0 0 36 46" version="1.1"  preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>home-line</title>
                                <path class="clr-i-outline clr-i-outline-path-1" d="M33.71,17.29l-15-15a1,1,0,0,0-1.41,0l-15,15a1,1,0,0,0,1.41,1.41L18,4.41,32.29,18.71a1,1,0,0,0,1.41-1.41Z"></path><path class="clr-i-outline clr-i-outline-path-2" d="M28,32h-5V22H13V32H8V18L6,20V32a2,2,0,0,0,2,2h7V24h6V34h7a2,2,0,0,0,2-2V19.76l-2-2Z"></path>
                                <rect x="0" y="0" width="36" height="36" fill-opacity="0"/>
                            </svg>
                        </a>
                    </div>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu Dana-Regular',
                        'container'      => false,
                        'fallback_cb'    => 'wp_page_menu',
                        'depth'          => 3
                    ));
                    ?>
                </nav>

                <div class="col-md-2 d-flex justify-content-end">
                    <button class="buttonTroy Dana-Bold" >تماس با ما</button>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="content" class="site-content">
    <div>