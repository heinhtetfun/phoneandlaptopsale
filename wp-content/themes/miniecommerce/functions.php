<?php
// Register nav walker class alias
require_once('class-wp-bootstrap-navwalker.php');

//theme support
function wp_theme_setup(){
    //Nav menus
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}

add_action('after_setup_theme', 'wp_theme_setup');

function wp_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wp_theme_support');

// For Widgets
add_theme_support('widgets');


// For Custom Posttype
function wp_custom_post_type_for_smartphone(){
    $args = array(
        'labels' => array(
            'name' => 'Smartphones',
            'singular_name' => 'Smartphone'
        ),
        'hierarchical' =>true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' =>'dashicons-smartphone',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type('smartphone', $args);
}
add_action('init', 'wp_custom_post_type_for_smartphone');

function taxonomy_for_smartphone(){
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'hierarchical' => true,

    );
    register_taxonomy('smartphone_brands', array('smartphone'), $args);
}
add_action('init', 'taxonomy_for_smartphone');

function wp_custom_post_type_for_pc(){
    $args = array(
        'labels' => array(
            'name' => 'PCs',
            'singular_name' => 'PC'
        ),
        'hierarchical' =>true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' =>'dashicons-laptop',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type('pc', $args);
}
add_action('init', 'wp_custom_post_type_for_pc');
function taxonomy_for_pc(){
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'hierarchical' => true,

    );
    register_taxonomy('pc_brands', array('pc'), $args);
}
add_action('init', 'taxonomy_for_pc');