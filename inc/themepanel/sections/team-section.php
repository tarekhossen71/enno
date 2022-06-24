<?php
    CSF::createSection( $prefix, array(
        'title'  => 'Team Section',
        'fields' => array(
          array(
            'id'    => 'team_section_title',
            'type'  => 'text',
            'title' => 'Team Section Title',
          ),
          array(
            'id'    => 'team_section_content',
            'type'  => 'textarea',
            'title' => 'Team Section Content',
          ),
          array(
            'id'        => 'team_section_repeater',
            'title'     => 'Team',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    'id'        => 'team_media',
                    'title'     => 'Team Image',
                    'type'      => 'media',
                ),
                array(
                    'id'        => 'team_name',
                    'title'     => 'Team Name',
                    'type'      => 'text',
                ),
                array(
                    'id'        => 'team_designation',
                    'title'     => 'Team Designation',
                    'type'      => 'text',
                ),
                array(
                    'id'        => 'team_about',
                    'title'     => 'Team About',
                    'type'      => 'textarea',
                ),
                
            ),
        ),
        )
      ) );