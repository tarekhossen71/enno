<?php
    CSF::createSection( $prefix, array(
        'title'     => 'Services Section',
        'fields'    => array(
            array(
                'id'        => 'services_section_title',
                'title'     => 'Services Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'services_section_description',
                'title'     => 'Services Description',
                'type'      => 'textarea',
            ),
            array(
                'id'        => 'services_section_repeater',
                'title'     => 'Services',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'services_icon',
                        'title'     => 'Service Icon Tag',
                        'type'      => 'text',
                    ),
                    array(
                        'id'        => 'services_title',
                        'title'     => 'Service Title',
                        'type'      => 'text',
                    ),
                    array(
                        'id'        => 'services_description',
                        'title'     => 'Service Description',
                        'type'      => 'textarea',
                    ),
                ),
            ),
        ),
    ) );