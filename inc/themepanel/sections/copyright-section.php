<?php
    CSF::createSection( $prefix, array(
        'title'     => 'Copyright Section',
        'fields'    => array(
            array(
                'id'        => 'copyright_section_title',
                'title'     => 'Copyright Title',
                'type'      => 'text',
            ),
            array(
                'id'        => 'copyright_section_description',
                'title'     => 'Copyright Description',
                'type'      => 'text',
            ),
        ),
    ) );