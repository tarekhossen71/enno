<?php
    require_once get_template_directory(). '/inc/themepanel/codestar-framework.php';
    require_once get_template_directory(). '/inc/themepanel/themepanel-custom.php';

    // theme setup 
	function enno_theme_setup(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', [ 'aside','audio', 'video', 'image', 'gallery', 'quote', 'link', 'status', 'chat' ] );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );
        add_theme_support( 'menus' );

        // Menus 
        register_nav_menus( array(
            'main-menu'      => __( 'Main Menu', 'enno' ),
        ) );
        function add_menu_link_class( $atts, $item, $args ) {
            if (property_exists($args, 'link_class')) {
              $atts['class'] = $args->link_class;
            }
            return $atts;
          }
          add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
    }
    add_action( 'after_setup_theme', 'enno_theme_setup' );


    function enno_assets(){
        wp_enqueue_style( 'googleapis', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' );
        wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
        wp_enqueue_style( 'boxicons-min', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css' );
        wp_enqueue_style( 'glightbox-min', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css' );
        wp_enqueue_style( 'swiper-bundle-min', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'theme-style', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );


        wp_enqueue_script( 'purecounter', get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',[ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'swiper-bundle', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'validate', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets/js/main.js', [ 'jquery' ], '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'enno_assets' );

    // Post type file linkup
    // require_once get_template_directory(). '/inc/post-types/post-type-functions.php';

   