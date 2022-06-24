<?php
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