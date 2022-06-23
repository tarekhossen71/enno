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
  
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Hero Section',
      'fields' => array(
  
        // A text field
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
  
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
  
      )
    ) );
  
  }