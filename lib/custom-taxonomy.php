<?php
// Register Taxonomy Categorie
// Taxonomy Key: skill
function _themename_taxonomy_skill() {

    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', '_themename' ),
        'singular_name'     => _x( 'Categorie', 'taxonomy singular name', '_themename' ),
        'search_items'      => __( 'Search Categories', '_themename' ),
        'all_items'         => __( 'All Categories', '_themename' ),
        'parent_item'       => __( 'Parent Categorie', '_themename' ),
        'parent_item_colon' => __( 'Parent Categorie:', '_themename' ),
        'edit_item'         => __( 'Edit Categorie', '_themename' ),
        'update_item'       => __( 'Update Categorie', '_themename' ),
        'add_new_item'      => __( 'Add New Categorie', '_themename' ),
        'new_item_name'     => __( 'New Categorie Name', '_themename' ),
        'menu_name'         => __( 'Categories', '_themename' ),
    );
    $args = array(
        'labels' => $labels,
        'description' => __( 'Categorie', '_themename' ),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        // Remove possibilities to add categorie
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
        // User can't add taxonomies
        'capabilities' => array(
            'manage_terms' => '',
            'edit_terms' => '',
            'delete_terms' => '',
            'assign_terms' => 'edit_posts'
        ),
    );
    register_taxonomy( 'categorie', array( 'project' ), $args );

}
add_action( 'init', '_themename_taxonomy_skill' );
