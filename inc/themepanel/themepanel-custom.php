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
    CSF::createSection( $prefix, array(
      'title'  => 'Hero Section',
      'fields' => array(
        array(
          'id'    => 'hero_section_title',
          'type'  => 'text',
          'title' => 'Hero Section Title',
        ),
        array(
          'id'    => 'hero_section_content',
          'type'  => 'textarea',
          'title' => 'Hero Section Content',
        ),
        array(
          'id'    => 'hero_section_button_name',
          'type'  => 'text',
          'title' => 'Hero Section Button Name',
        ),
        array(
          'id'      => 'hero_section_button_id',
          'type'    => 'text',
          'title'   => 'Hero Section Button Id',
          'default' => '#about'
        ),
        array(
          'id'      => 'hero_section_video_url',
          'type'    => 'text',
          'title'   => 'Hero Section Video_url',
        ),
        array(
          'id'      => 'hero_section_video_button_name',
          'type'    => 'text',
          'title'   => 'Hero Section Video Button Name',
        ),
  
        array(
          'id'      => 'hero_section_image',
          'type'    => 'media',
          'title'   => 'Hero Section Image',
        ),
  
      )
    ) );
    
    // Featured Services Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Featured Services',
        'fields'    => array(
            array(
                'id'        => 'featured_service_repeater',
                'title'     => 'Featured Services',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'featured_service_icon',
                        'type'      => 'text',
                        'title'     => 'Featured Services Icon Tag',
                        'desc'      => 'Get Icon From: https://icons.getbootstrap.com/icons'
                    ),
                    array(
                        'id'        => 'featured_service_title',
                        'type'      => 'text',
                        'title'     => 'Featured Services Title'
                    ),
                    array(
                        'id'        => 'featured_service_shortdes',
                        'type'      => 'textarea',
                        'title'     => 'Featured Services Short Description'
                    ),
                ),
            ),
        ),
    ) );
    // About Section 
    CSF::createSection( $prefix, array(
        'title'     => 'About Section',
        'fields'    => array(
            array(
                'id'        => 'about_image',
                'title'     => 'About Image',
                'type'      => 'media',
            ),
            array(
                'id'        => 'about_title',
                'title'     => 'About Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'about_description',
                'title'     => 'About Description',
                'type'      => 'textarea',
            ),
            array(
                'id'        => 'about_repeater',
                'title'     => 'About List',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'about_list',
                        'title'     => 'About List Item',
                        'type'      => 'text',
                    ),
                ),
            ),
        ),
    ) );
    // Counter Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Counter Section',
        'fields'    => array(
            array(
                'id'        => 'courser_section_repeater',
                'title'     => 'Counter',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'counter_number',
                        'title'     => 'Count Number',
                        'type'      => 'text',
                    ),
                    array(
                        'id'        => 'counter_name',
                        'title'     => 'Count Name',
                        'type'      => 'text',
                    ),
                ),
            ),
        ),
    ) );
    // Services Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Services Section',
        'fields'    => array(
            array(
                'id'        => 'service_section_title',
                'title'     => 'Services Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'service_section_description',
                'title'     => 'Services Description',
                'type'      => 'textarea',
            ),
            array(
                'id'        => 'services_section_repeater',
                'title'     => 'Services',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'service_icon',
                        'title'     => 'Service Icon Tag',
                        'type'      => 'text',
                    ),
                    array(
                        'id'        => 'service_title',
                        'title'     => 'Service Title',
                        'type'      => 'text',
                    ),
                    array(
                        'id'        => 'service_description',
                        'title'     => 'Service Description',
                        'type'      => 'textarea',
                    ),
                ),
            ),
        ),
    ) );
    
  }