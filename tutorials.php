<?php
/**
 * @package Tutorials
 * @version 1.0.0
 */
/*
Plugin Name: Tutorials
Plugin URI: https://github.com/IriW/wp_tutorial
Description: This is an awesome plugin for great world fix hope XD
Author: Irina Dębowska
Version: 1.0.0
Author URI: https://github.com/IriW/
*/

//security to prevent direct access of php files.

if ( ! defined( 'ABSPATH' )) {
    exit;
}

function create_tutorials_cpt() {
$labels = array(
'name' => __( 'tutorials', 'Post Type General Name', 'tutorials' ),
'singular_name' => __( 'tutorial', 'Post Type Singular Name', 'tutorial' ),
'menu_name' => __( 'tutorials', 'tutorials'),
'name_admin_bar' => __( 'tutorials', 'tutorials'),
'archives' => __( 'Tutorial Archives', 'tutorials'),
'attributes' => __( 'Tutorial Attributes', 'tutorials'),
'parent_item_colon' => __( 'Parent Tutorial', 'tutorials'),
'all_items' => __( 'All Tutorials', 'tutorials'),
'add_new_item' => __( 'Add New Tutorial', 'tutorials'),
'add_new' => __( 'Add New', 'tutorials'),
'new_item' => __( 'New Tutorial', 'tutorials'),
'edit_item' => __( 'Edit Tutorial', 'tutorials'),
'update_item' => __( 'Update Tutorial', 'tutorials'),
'view_item' => __( 'View Tutorial', 'tutorials'),
'view_items' => __( 'View Tutorials', 'tutorials'),
'search_items' => __( 'Search Tutorials', 'tutorials'),
'not_found' => __( 'Not Found', 'tutorials'),
'not_found_in_trash' => __( 'Not Found in Trash', 'tutorials'),
'featured_image' => __( 'Featured Image', 'tutorials'),
'set_featured_image' => __( 'Set Featured Image', 'tutorials'),
'remove_featured_image' => __( 'Remove Featured Image', 'tutorials'),
'use_featured_image' => __( 'Use as Featured Image', 'tutorials'),
'insert_into_item' => __( 'Insert Into Tutorial', 'tutorials'),
'uploaded_to_this_item' => __( 'Uploaded To This Tutorial', 'tutorials'),
'items_list' => __( 'Tutorials List', 'tutorials'),
'items_list_navigation' => __( 'Tutorials List Navigation', 'tutorials'),
'filter_items_list' => __( 'Filter Tutorials List', 'tutorials'),
);
$args = array(
    'label' => __( 'Tutorial', 'tutorials'),
    'description' => __( 'Fullstack Web Dev Tutorial', 'tutorials'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-editor-video',
    'supports' => array('title', 'editor', 'thumbnails', 'revisions', 'author'),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'tutorials'),
);
register_post_type('tutorials', $args);

}
add_action('init', 'create_tutorials_cpt', 0);
function rewrite_tuts_flush(){
    create_tutorials_cpt();
    flush_rewrite_rules();
    }
    register_activation_hook(__FILE__, 'rewrite_tuts_flush');
