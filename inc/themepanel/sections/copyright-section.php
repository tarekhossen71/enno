<?php
    CSF::createSection( $prefix, array(
        'title'     => 'Copyright Section',
        'fields'    => array(
            array(
                'id'        => 'copyright_section_text',
                'title'     => 'Copyright text',
                'type'      => 'code_editor',
            ),
            array(
                'id'        => 'copyright_section_design_by',
                'title'     => 'Copyright Design By',
                'type'      => 'text',
            ),
            array(
                'id'        => 'copyright_section_design_by_url',
                'title'     => 'Copyright Design By URL',
                'type'      => 'text',
            ),
        ),
    ) );