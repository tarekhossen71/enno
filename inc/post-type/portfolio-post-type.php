<?php
    /**
	 * Plugin Name:       My First Plugin by Akash
	 * Plugin URI:        https://example.com/plugins/the-basics/
	 * Description:       Handle the basics with this plugin.
	 * Version:           1.10.3
	 * Requires at least: 5.2
	 * Requires PHP:      7.2
	 * Author:            John Smith
	 * Author URI:        https://author.example.com/
	 * License:           GPL v2 or later
	 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
	 * Update URI:        https://example.com/my-plugin/
	 * Text Domain:       my-basics-plugin
	 * Domain Path:       /languages
	 */
    function v_folio_porfolio(){
        $labels = array(
                'name'                  => __( 'Portfolios', 'v_folio' ),
                'singular_name'         => __( 'Portfolio', 'v_folio' ),
                'add_new'               => __( 'Add New Portfolio', 'v_folio' ),
                'add_new_item'          => __( 'Add New Portfolio', 'v_folio' ),
                'edit_item'             => __( 'Edit Portfolio', 'v_folio' ),
                'all_items'             => __( 'All Portfolio', 'v_folio' ),
                'new_item'              => __( 'New Portfolio', 'v_folio' ),
                'view_item'             => __( 'View Portfolio', 'v_folio' ),
                'search_items'          => __( 'Search Portfolios', 'v_folio' ),
                'not_found'             => __( 'No Portfolios found', 'v_folio' ),
                'not_found_in_trash'    => __( 'No Portfolios found in Trash', 'v_folio' ),
                'parent_item_colon'     => __( 'Parent Portfolio:', 'v_folio' ),
                'menu_name'             => __( 'Portfolios', 'v_folio' ),
                'featured_image'        => __( 'Portfolio Image', 'v_folio' ),
                'set_featured_image'    => __( 'Set Portfolio Image', 'v_folio' ),
                'remove_featured_image' => __( 'Remove Portfolio Image', 'v_folio' )
        );
        $args = array(
            'labels'                => $labels,
            'hierarchical'          => false,
            'description'           => 'description',
            'taxonomies'            => array(),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_admin_bar'     => true,
            'menu_position'         => null,
            'menu_icon'             => 'dashicons-portfolio',
            'show_in_nav_menus'     => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'has_archive'           => true,
            'query_var'             => true,
            'can_export'            => true,
            'rewrite'               => true,
            'capability_type'       => 'post',
            'supports'              => array( 'title','editor', 'thumbnail' ),
        );
        register_post_type( 'portfolio', $args );

        register_taxonomy( 'portfolio_taxonomy', array( 'portfolio' ), array(
            'labels'        => array(
                'name'                  => __( 'Portfolio Categories', 'v_folio' ),
                'singular_name'         => __( 'Portfolio Categories', 'v_folio' ),
                'search_items'          => __( 'Search Portfolio Categories', 'v_folio' ),
                'popular_items'         => __( 'Popular Portfolio Categories', 'v_folio' ),
                'all_items'             => __( 'All Portfolio Categories', 'v_folio' ),
                'parent_item'           => __( 'Parent Portfolio Categories', 'v_folio' ),
                'parent_item_colon'     => __( 'Parent Portfolio Categories', 'v_folio' ),
                'edit_item'             => __( 'Edit Portfolio Categories', 'v_folio' ),
                'update_item'           => __( 'Update Portfolio Categories', 'v_folio' ),
                'add_new_item'          => __( 'Add New Portfolio Categories', 'v_folio' ),
                'new_item_name'         => __( 'New Portfolio Categories', 'v_folio' ),
                'add_or_remove_items'   => __( 'Add or remove Portfolio Categories', 'v_folio' ),
                'choose_from_most_used' => __( 'Portfolio Categories', 'v_folio' ),
                'menu_name'             => __( 'Portfolio Categories', 'v_folio' ),
            ),
            'public'                    => true,
            'show_in_nav_menus'         => true,
            'show_admin_column'         => false,
            'hierarchical'              => true,
            'show_tagcloud'             => true,
            'show_ui'                   => true,
            'query_var'                 => true,
            'rewrite'                   => true,
            'query_var'                 => true,
            'capabilities'              => array(),
        ));
    }
    add_action( 'init', 'v_folio_porfolio' );

    