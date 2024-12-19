<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html <?php language_attributes();?> >

<head>
    <?php wp_head();?>
  <meta charset="<?php bloginfo( 'charset' );?>">
  <title><?php bloginfo( 'name' );?></title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(  ).'/assets/css/bootstrap.min.css'?>">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/slick/slick.css';?>">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/themify-icons/themify-icons.css';?>">

  <!-- Main Stylesheet -->
  <link href="<?php echo get_stylesheet_directory_uri(  ).'/assets/css/style.css'?>" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/favicon.ico'?>" type="image/x-icon">

</head>

<body <?php body_class(); ?>>
<!-- preloader -->
<!-- <div class="preloader">
    <div class="loader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- /preloader -->

<header class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <?php 
            if (has_custom_logo()) {
                 the_custom_logo();
            } else {
                echo '<img class="img-fluid" src="' . esc_url(get_template_directory_uri() . '/images/logo.png') . '" alt="' . get_bloginfo('name') . '">';
            }
        ?>
    </a>

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navogation">
      <?php 
        wp_nav_menu( array(
            'theme_location' => 'primary', // Define your theme location
            'menu_class' => 'navbar-nav ml-auto', // Add a custom class for styling
            'container' => false, // No container div
            'depth' => 2, // To handle dropdown menus
           'fallback_cb' => false, // In case no menu is defined, do nothing
        ) );
      ?>
      <?php get_search_form();?>
      <!-- <form class="form-inline position-relative ml-lg-4">
        <input class="form-control px-0 w-100" type="search" placeholder="Search">
        <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
      <!--  <a href="search.html" class="search-icon"><i class="ti-search text-dark"></i></a>
      </form> -->
    </div>
  </nav>
</header>
