<!doctype html>
<html lang="<?php echo get_locale() ?>">
    <head>
    <meta charset="utf-8">
    <title><?php echo get_current_title(); ?></title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="RecArc Interior & Exterior Design - HTML Template">
    <meta name="keywords" content="RecArcs Interior Design, html, template, responsive, corporate, business, Construction">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="<?php echo get_resource_full_url('js/respond.js') ?>"></script><![endif]-->
    <!-- favicon -->
    <link rel="icon" href="<?php echo get_site_icon_url() ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800">
    <link rel="stylesheet" href="<?php echo get_resource_full_url('css/bootstrap.css'); ?>" >
    <link rel="stylesheet" href="<?php echo get_resource_full_url('css/fonts.css'); ?>" >

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="<?php echo get_resource_full_url('dist/color-default.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_resource_full_url('dist/color-switcher.css"'); ?>" >

    <link rel="stylesheet" href="<?php echo get_resource_full_url('css/style.css'); ?>">
    </head>
<body>
<div class="preloader">
  <div class="cssload-box-loading"></div>
</div>
<div class="page"> 
  <!-- Page Header-->
  <header class="section novi-background bg-cover page-header" id="home"> 
    <!-- RD Navbar-->
    <div class="recarc-navbar-wrap">
      <nav class="recarc-navbar" data-layout="recarc-navbar-fixed" data-sm-layout="recarc-navbar-fixed" data-md-layout="recarc-navbar-fixed" data-lg-layout="recarc-navbar-fixed" data-lg-device-layout="recarc-navbar-fixed" data-xl-layout="recarc-navbar-sidebar" data-xl-device-layout="recarc-navbar-sidebar" data-xxl-layout="recarc-navbar-sidebar" data-xxl-device-layout="recarc-navbar-sidebar" data-xl-stick-up-offset="400" data-xxl-stick-up-offset="400">
        <div class="recarc-navbar-main-outer">
          <div class="recarc-navbar-main"> 
            <!-- RD Navbar Panel-->
            <div class="recarc-navbar-panel"> 
              <!-- RD Navbar Brand-->
              <div class="recarc-navbar-brand">
                  <a class="brand" href="<?php echo home_url() ?>">
                      <?php echo get_logo() ?>
                  </a>
              </div>
              <!-- RD Navbar Toggle-->
              <button class="recarc-navbar-toggle" data-recarc-navbar-toggle=".recarc-navbar-nav-wrap"><span></span></button>
            </div>
            <div class="recarc-navbar-main-element">
              <div class="recarc-navbar-nav-wrap"> 
                <!-- RD Navbar Nav-->
                  <?php
                    wp_nav_menu(array(
                        'container' => '',
                        'menu_class' => 'recarc-navbar-nav',
                        'menu' => 'primary'
                    ));
                  ?>
                <div class="contacts-classic">
                  <div class="unit align-items-center">
                    <div class="unit-left"><span class="icon novi-icon mdi mdi-cellphone"></span></div>
                    <div class="unit-body"><a class="contacts-classic-text" href="tel:#"><?php echo get_field('primary-phone-number', 49) ?></a></div>
                  </div>
                </div>
                  <?php
                  wp_nav_menu(array(
                      'container' => '',
                      'menu' => 'language'
                  ));
                  ?>
              </div>
                <div>
                    <?php
                        if (get_locale() == 'uz_UZ')
                            echo "<a href=\"\">"
                    ?>
                    <a href=""></a>
                </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
    <?php part_include('slide-section'); ?>