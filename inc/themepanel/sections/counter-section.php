<?php
CSF::createSection( $prefix, array(
    'title'     => 'Counter Section',
    'fields'    => array(
        array(
            'id'        => 'courser_section_repeater',
            'title'     => 'Counter',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    'id'        => 'counter_number',
                    'title'     => 'Count Number',
                    'type'      => 'text',
                ),
                array(
                    'id'        => 'counter_name',
                    'title'     => 'Count Name',
                    'type'      => 'text',
                ),
            ),
        ),
    ),
) );