<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
// 
// 

// For Custom Posttype
function wp_custom_post_type_for_eventsale(){
    $args = array(
        'labels' => array(
            'name' => 'Sales',
            'singular_name' => 'Sale'
        ),
        'hierarchical' =>true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' =>'dashicons-smartphone',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'comments')
    );
    register_post_type('sale', $args);
}
add_action('init', 'wp_custom_post_type_for_eventsale');

function taxonomy_for_sale(){
    $args = array(
        'labels' => array(
            'name' => 'SaleBrands',
            'singular_name' => 'SaleBrand'
        ),
        'public' => true,
        'hierarchical' => true,

    );
    register_taxonomy('sale_brands', array('sale'), $args);
}
add_action('init', 'taxonomy_for_sale');

function wp_custom_post_type_for_blog(){
    $args = array(
        'labels' => array(
            'name' => 'Blogs',
            'singular_name' => 'Blog'
        ),
        'hierarchical' =>true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'comments')
    );
    register_post_type('blog', $args);
}
add_action('init', 'wp_custom_post_type_for_blog');

function taxonomy_for_blog(){
    $args = array(
        'labels' => array(
            'name' => 'BlogCategories',
            'singular_name' => 'BlogCategory'
        ),
        'public' => true,
        'hierarchical' => true,

    );
    register_taxonomy('sale_brands', array('blog'), $args);
}
add_action('init', 'taxonomy_for_blog');