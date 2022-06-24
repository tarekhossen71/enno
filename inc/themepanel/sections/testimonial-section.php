<?php
CSF::createSection( $prefix, array(
    'title'     => 'Testimonial Section',
    'fields'    => array(
        array(
            'id'        => 'testimonial_section_title',
            'title'     => 'Testimonial Title',
            'type'      => 'text',
        ),
        array(
            'id'        => 'testimonial_section_description',
            'title'     => 'Testimonial Description',
            'type'      => 'textarea',
        ),
        array(
            'id'        => 'testimonial_section_repeater',
            'title'     => 'Testimonial',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    'id'        => 'testimonial_about',
                    'title'     => 'Testimonial About',
                    'type'      => 'textarea',
                ),
                array(
                    'id'        => 'testimonial_media',
                    'title'     => 'Testimonial Image',
                    'type'      => 'media',
                ),
                array(
                    'id'        => 'testimonial_name',
                    'title'     => 'Testimonial Name',
                    'type'      => 'text',
                ),
                array(
                    'id'        => 'testimonial_designation',
                    'title'     => 'Testimonial Designation',
                    'type'      => 'text',
                ),
            ),
        ),
    ),
) );