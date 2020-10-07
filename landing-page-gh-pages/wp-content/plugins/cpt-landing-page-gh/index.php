<?php 
/*
 * Plugin Name: Landing page GH pages plugin. My own code!
 * Description: A simple WordPress plugin that allows user to create CPTs for the WP theme "agencyghpages"
 * Version: 1.0
 * Author: Sam the Coder
 * Author URI: none
 * Text Domain: Landing page GH
 */

if( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, not much I can do when I called directly.";
    exit;
}

/**
 * Setup
 */ 


/**
 * Includes
 */
include( 'init.php' );



/**
 * Hooks
 */
add_action( 'init', 'images_showcase_init' );
add_action( 'init', 'testimonials_init' );

/**
 * Shortcodes
 */

