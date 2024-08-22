<?php
//acf theme page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> 'false'
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Additional Settings',
		'menu_title'	=> 'Additional',
		'parent_slug'	=> 'theme-general-settings',
	));
}

function team_custom_post_type() {
	
    $labels = array(

		'name'                => _x( 'Teams', 'Post Type General Name', 'Team' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'Team' ),
		'menu_name'           => __( 'Teams', 'Team' ),
		'parent_item_colon'   => __( 'Parent Team', 'Team' ),
		'all_items'           => __( 'All Teams', 'Team' ),
		'view_item'           => __( 'View Team', 'Team' ),
		'add_new_item'        => __( 'Add New Team', 'Team' ),
		'add_new'             => __( 'Add New', 'Team' ),
		'edit_item'           => __( 'Edit Team', 'Team' ),
		'update_item'         => __( 'Update Team', 'Team' ),
		'search_items'        => __( 'Search Team', 'Team' ),
		'not_found'           => __( 'Not Found', 'Team' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Team' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'Teams', 'Team' ),
		'description'         => __( 'Team news and reviews', 'Team' ),
		'labels'              => $labels,  
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),     
		'taxonomies'          => array( 'genres' ),     
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true, 
	);
	// Registering your Custom Post Typ
	register_post_type( 'teams', $args );

}

add_action( 'init', 'Team_custom_post_type', 0 );


function teamcategory_custom_taxonomies() {

    register_taxonomy('team_categories', 'teams', array(

      'hierarchical' => true,
      'labels' => array(
        'name' => _x( 'Team Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Team Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Team Categories' ),
        'all_items' => __( 'All Team Categories' ),
        'parent_item' => __( 'Parent Team Category' ),
        'parent_item_colon' => __( 'Parent Team Category:' ),
        'edit_item' => __( 'Edit Team Category' ),
        'update_item' => __( 'Update Team Category' ),                               
        'add_new_item' => __( 'Add New Team Category' ),
        'new_item_name' => __( 'New Team Category' ),
        'menu_name' => __( 'Team Categories' ),
      ),

      // Control the slugs used for this taxonomy

      'rewrite' => array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'show_in_menu' => true,
      'query_var' => true,
      ),

    ));

  }
  add_action( 'init', 'teamcategory_custom_taxonomies', 0 );

