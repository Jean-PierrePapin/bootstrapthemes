<?php
/**
 * Landing page functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */


/**
 * BootStrap only works in WordPress 5.0 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) ) {
	return "Please update to WordPress 5.0 or later so the theme can work";
}

/**
 * Setup
 */



/**
 * Includes
 */
include( get_theme_file_path( '/includes/front/enqueue.php' ) );




/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'landing_page_gh_enqueue' );


/**
 * Shortcodes
 */

