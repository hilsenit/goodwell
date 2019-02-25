<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Full car image
add_image_size( 'car-wide', 99999, 720 ); 
add_image_size( 'front_thumb', 338, 177 );

add_filter( 'wpcf7_load_css', '__return_false' );

wp_enqueue_script("jquery");

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
