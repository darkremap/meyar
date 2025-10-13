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
                        <img class="site-logo-Soff" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoLight.png" alt="Mwyar">
                        <img class="site-logo-Son" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoBlue.png" alt="Mwyar">
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
                            <svg width="20" height="19" viewBox="0 0 20 19"  xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4831 19H3.51689C2.67944 19 2 18.3911 2 17.6406V13.3594C2 12.6089 2.67944 12 3.51689 12C4.35434 12 5.03377 12.6089 5.03377 13.3594V16.2811H14.9662V13.3594C14.9662 12.6089 15.6457 12 16.4831 12C17.3206 12 18 12.6089 18 13.3594V17.6406C18 18.3911 17.3206 19 16.4831 19Z" fill="white"/>
                                <path d="M18.5466 11C18.1747 11 17.8028 10.8639 17.5187 10.5911L10 3.37021L2.48126 10.5911C1.91375 11.1361 0.993141 11.1361 0.425632 10.5911C-0.141877 10.0461 -0.141877 9.16192 0.425632 8.61689L8.97218 0.408915C9.24473 0.147163 9.6148 0 10 0C10.3852 0 10.7553 0.147163 11.0278 0.408915L19.5744 8.61689C20.1419 9.16192 20.1419 10.0461 19.5744 10.5911C19.2903 10.8639 18.9184 11 18.5466 11Z" fill="white"/>
                                <path d="M3.5 9C2.67188 9 2 8.30178 2 7.44118V2.55882C2 1.69822 2.67188 1 3.5 1C4.32812 1 5 1.69822 5 2.55882V7.44118C5 8.30178 4.32812 9 3.5 9Z" fill="white"/>
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