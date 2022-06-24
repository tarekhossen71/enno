<?php
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