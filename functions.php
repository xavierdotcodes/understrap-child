<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    /*wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' )
        wp_deregister_script( 'understrap-scripts' );*/

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function lesson_custom_post_type() {
    $labels = array(
        'name' => _x( 'Lessons', 'post type general name' ), 
        'singular_name' => _x( 'Lesson', 'post type singuler name' ), 
        'add_new' => _x('Add New', 'Lesson'), 
        'add_new_item' => __( 'Add New Lesson' ),
        'edit_item' => __('Edit Lesson'), 
        'new_item' => __('New Lesson'),
        'all_items' => __('All Lessons'),
        'view_item' => __('View Lesson'), 
        'search_items' => __('Search lessons'), 
        'not_found' => __('No Lessons found'), 
        'not_found_in_trash' => __('No lessons found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Lessons'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Displays lessons and their description',
        'public' => true,
        'menu_position' => 4, 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), 
        'has_archive' => true,
    );
    register_post_type( 'lesson', $args  );
    
}
add_action( 'init', 'lesson_custom_post_type'  );


function resources_custom_post_type() {
    $labels = array(
        'name' => _x( 'Resources', 'post type general name' ), 
        'singular_name' => _x( 'Resource', 'post type singuler name' ), 
        'add_new' => _x('Add New', 'Lesson'), 
        'add_new_item' => __( 'Add New Resource' ),
        'edit_item' => __('Edit Resource'), 
        'new_item' => __('New Resource'),
        'all_items' => __('All Resources'),
        'view_item' => __('View Resource'), 
        'search_items' => __('Search resources'), 
        'not_found' => __('No Resources found'), 
        'not_found_in_trash' => __('No resources found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Resources'
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Displays resources and their description',
        'public' => true,
        'menu_position' => 5, 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), 
        'has_archive' => true,
    );

    register_post_type( 'resource', $args  );
    
}
add_action( 'init', 'resources_custom_post_type'  );

function subscriber_custom_post_type() {
    $labels = array(
        'name' => _x( 'Subscribers', 'post type general name' ), 
        'singular_name' => _x( 'Subscriber', 'post type singuler name' ), 
        'add_new' => _x('Add New', 'Subscriber'), 
        'add_new_item' => __( 'Add New Subscriber' ),
        'edit_item' => __('Edit Subscriber'), 
        'new_item' => __('New Subscriber'),
        'all_items' => __('All Subscriber'),
        'view_item' => __('View Subscriber'), 
        'search_items' => __('Search subscribers'), 
        'not_found' => __('No Subscribers found'), 
        'not_found_in_trash' => __('No subscribers found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Subscribers'
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Displays subscribers and their details',
        'public' => true,
        'menu_position' => 6, 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), 
        'has_archive' => true,
    );

    register_post_type( 'subscriber', $args  );
    
}
add_action( 'init', 'subscriber_custom_post_type'  );
