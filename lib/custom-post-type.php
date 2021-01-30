<?php

// Register Custom Post Type Project
// Post Type Key: project
function _themename_custom_post_type() {

	$labels = array(
		'name' => _x( 'Project', 'Post Type General Name', '_themename' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', '_themename' ),
		'menu_name' => _x( 'Project', 'Admin Menu text', '_themename' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', '_themename' ),
		'archives' => __( 'Project Archives', '_themename' ),
		'attributes' => __( 'Project Attributes', '_themename' ),
		'parent_item_colon' => __( 'Parent Project:', '_themename' ),
		'all_items' => __( 'All Project', '_themename' ),
		'add_new_item' => __( 'Add New Project', '_themename' ),
		'add_new' => __( 'Add New', '_themename' ),
		'new_item' => __( 'New Project', '_themename' ),
		'edit_item' => __( 'Edit Project', '_themename' ),
		'update_item' => __( 'Update Project', '_themename' ),
		'view_item' => __( 'View Project', '_themename' ),
		'view_items' => __( 'View Project', '_themename' ),
		'search_items' => __( 'Search Project', '_themename' ),
		'not_found' => __( 'Not found', '_themename' ),
		'not_found_in_trash' => __( 'Not found in Trash', '_themename' ),
		'featured_image' => __( 'Featured Image', '_themename' ),
		'set_featured_image' => __( 'Set featured image', '_themename' ),
		'remove_featured_image' => __( 'Remove featured image', '_themename' ),
		'use_featured_image' => __( 'Use as featured image', '_themename' ),
		'insert_into_item' => __( 'Insert into Project', '_themename' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', '_themename' ),
		'items_list' => __( 'Project list', '_themename' ),
		'items_list_navigation' => __( 'Project list navigation', '_themename' ),
		'filter_items_list' => __( 'Filter Project list', '_themename' ),
	);
	$args = array(
		'label' => __( 'Project', '_themename' ),
		'description' => __( 'Check out our portfolio projects', '_themename' ),
		'labels' => $labels,
        'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array( 'categorie' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', '_themename_custom_post_type', 0 );

