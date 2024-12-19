<?php 
function enqueue_bootstrap_scripts() {
    // Enqueue Bootstrap CSS from CDN
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1');

    // Enqueue Bootstrap JS from CDN
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts');

//adding style.css
function enqueue_theme_styles() {
    // Enqueue the theme's main style.css file
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


//Adding Title in Wordpress
add_theme_support( 'title-tag' );

//Adding CustomLogo in Backend
add_theme_support( 'custom-logo' );

//Adding Featured Image for Blog
add_theme_support( 'post-thumbnails' );

//Adding Footer widgets in Dashboard
function pet_theme_footer_widgets() {
    // Register Footer Widget 1
    register_sidebar(array(
        'name'          => 'Footer Widget 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));

    // Register Footer Widget 2
    register_sidebar(array(
        'name'          => 'Footer Widget 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));

    // Register Footer Widget 3
    register_sidebar(array(
        'name'          => 'Footer Widget 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
}
add_action('widgets_init', 'pet_theme_footer_widgets');


// Adding Menu in my DashBoard
function my_theme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
        )
    );
}
add_action( 'after_setup_theme', 'my_theme_register_menus' );



//Registering Primary SideBar for Single.php PAge
function mytheme_register_sidebar() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'textdomain'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on the sidebar.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_register_sidebar');


//Front Page Setting if not set then it goes to Single.php
add_action('template_redirect', function() {
    // Check if the front page is not set
    if (is_home() && !get_option('page_on_front')) {
        // Load the default posts grid template
        include get_template_directory() . '/template-parts/recent-post-grid.php';
        exit;
    }
});

//Registering Primary SideBar 
function yourtheme_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'yourthemename' ),
        'id'            => 'primary-sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'yourtheme_register_sidebar' );





