<?php
    CSF::createSection( $prefix, array(
        'title'  => 'Call To Action Section',
        'fields' => array(
          array(
            'id'    => 'cta_section_title',
            'type'  => 'text',
            'title' => 'CTA Section Title',
          ),
          array(
            'id'    => 'cta_section_content',
            'type'  => 'textarea',
            'title' => 'CTA Section Content',
          ),
          array(
            'id'    => 'cta_section_button_name',
            'type'  => 'text',
            'title' => 'CTA Section Button Name',
          ),
          array(
            'id'    => 'cta_section_button_url',
            'type'  => 'text',
            'title' => 'CTA Section Button URL',
          ),
    
        )
      ) );