<?php
    // Check core class for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'theme-options',
    ) );
  
    // Hero Section
    require_once get_template_directory(). '/inc/themepanel/sections/hero-section.php';
    
    // Featured Services Section 
    require_once get_template_directory(). '/inc/themepanel/sections/featured-service-section.php';
    // About Section 
    require_once get_template_directory(). '/inc/themepanel/sections/about-section.php';
    // Counter Section 
    require_once get_template_directory(). '/inc/themepanel/sections/counter-section.php';
    // Services Section 
    require_once get_template_directory(). '/inc/themepanel/sections/services-section.php';
    // Testimonial Section 
    require_once get_template_directory(). '/inc/themepanel/sections/testimonial-section.php';
    // Call to action Section 
    require_once get_template_directory(). '/inc/themepanel/sections/cta-section.php';
    // Team Section 
    require_once get_template_directory(). '/inc/themepanel/sections/team-section.php';
    // Contact Section 
    require_once get_template_directory(). '/inc/themepanel/sections/contact-section.php';
    // Copyright Section 
    require_once get_template_directory(). '/inc/themepanel/sections/copyright-section.php';
    
  }