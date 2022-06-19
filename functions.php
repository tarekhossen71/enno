<?php
    require_once get_template_directory(). '/inc/customizer/customizer.php';

    // theme setup 
	function portfolio_theme_setup(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', [ 'aside','audio', 'video', 'image', 'gallery', 'quote', 'link', 'status', 'chat' ] );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );
        add_theme_support( 'menus' );
        add_image_size( 'custom-img', 80, 80, true );
    }
    add_action( 'after_setup_theme', 'portfolio_theme_setup' );


    function portfolio_assets(){
        wp_enqueue_style( 'fonts-gstatic', '//fonts.gstatic.com' );
        wp_enqueue_style( 'fonts-googleapis', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap' );
        wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css' );
        wp_enqueue_style( 'lightbox', get_template_directory_uri().'/assets/lib/lightbox/css/lightbox.min.css' );
        wp_enqueue_style( 'theme-style', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );


        wp_enqueue_script( 'jquery-min', '//code.jquery.com/jquery-3.4.1.min.js', [ 'json' ], '1.0.0', true );
        wp_enqueue_script( 'bootstrap-bundle', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',[ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'typed', get_template_directory_uri().'/assets/lib/typed/typed.min.js', [ 'jquery' ], '1.0.0', time() );
        wp_enqueue_script( 'easing', get_template_directory_uri().'/assets/lib/easing/easing.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/lib/isotope/isotope.pkgd.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'lightbox', get_template_directory_uri().'/assets/lib/lightbox/js/lightbox.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri().'/assets/mail/jqBootstrapValidation.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'contact', get_template_directory_uri().'/assets/mail/contact.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', null, '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'portfolio_assets' );

    // Post type file linkup
    require_once get_template_directory(). '/inc/post-types/post-type-functions.php';

   