<?php 

	function freefolio_post_types() {
		$labels = array(
			'name'               	=> __( 'Educations', 'freefolio' ),
			'singular_name'      	=> __( 'Education', 'freefolio' ),
			'add_new'            	=> _x( 'Add New Education', 'freefolio' ),
			'add_new_item'       	=> __( 'Add New Education', 'freefolio' ),
			'edit_item'          	=> __( 'Edit Education', 'freefolio' ),
			'new_item'           	=> __( 'New Education', 'freefolio' ),
			'view_item'          	=> __( 'View Education', 'freefolio' ),
			'all_items'				=> __( 'All Educations', 'freefolio' ),
			'search_items'       	=> __( 'Search Educations', 'freefolio' ),
			'not_found'          	=> __( 'No Educations found', 'freefolio' ),
			'not_found_in_trash' 	=> __( 'No Educations found in Trash', 'freefolio' ),
			'parent_item_colon'  	=> __( 'Parent Education:', 'freefolio' ),
			'menu_name'          	=> __( 'Educations', 'freefolio' ),
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title',
				'editor',
				'custom-fields',
			),
		);
	
		register_post_type( 'education', $args );

		$labels = array(
			'name'               	=> __( 'Expericences', 'freefolio' ),
			'singular_name'      	=> __( 'Expericence', 'freefolio' ),
			'add_new'            	=> _x( 'Add New Expericence', 'freefolio' ),
			'add_new_item'       	=> __( 'Add New Expericence', 'freefolio' ),
			'edit_item'          	=> __( 'Edit Expericence', 'freefolio' ),
			'new_item'           	=> __( 'New Expericence', 'freefolio' ),
			'view_item'          	=> __( 'View Expericence', 'freefolio' ),
			'all_items'				=> __( 'All Expericences', 'freefolio' ),
			'search_items'       	=> __( 'Search Expericences', 'freefolio' ),
			'not_found'          	=> __( 'No Expericences found', 'freefolio' ),
			'not_found_in_trash' 	=> __( 'No Expericences found in Trash', 'freefolio' ),
			'parent_item_colon'  	=> __( 'Parent Expericence:', 'freefolio' ),
			'menu_name'          	=> __( 'Expericences', 'freefolio' ),
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title',
				'editor',
				'custom-fields',
			),
		);
	
		register_post_type( 'expericence', $args );
	}
	add_action( 'init', 'freefolio_post_types' );


 