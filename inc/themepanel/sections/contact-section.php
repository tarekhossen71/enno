<?php
    CSF::createSection( $prefix, array(
        'title'     => 'Contact Section',
        'fields'    => array(
            array(
                'id'        => 'contact_section_title',
                'title'     => 'Contact Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_section_description',
                'title'     => 'Contact Description',
                'type'      => 'textarea',
            ),
            array(
                'id'        => 'contact_address_title',
                'title'     => 'Address Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_address_description',
                'title'     => 'Address Description',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_email_title',
                'title'     => 'Email Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_email',
                'title'     => 'Email Address',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_Phone_title',
                'title'     => 'Phone Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'contact_Phone_number',
                'title'     => 'Phone Number',
                'type'      => 'text',
            ),
        ),
    ) );