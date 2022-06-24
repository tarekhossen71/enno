<?php
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