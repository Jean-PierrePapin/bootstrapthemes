<?php

/**
 * File to enqueue the scripts and styles
 */

 function landing_page_gh_enqueue() {
    $uri        =   get_theme_file_uri();
    $ver        =   1;

    /**
     * Register and enqueue styles
     */

    // Register styles
    wp_register_style( 'landing_page_gh_pages', $uri . '/assets/css/landing-page.min.css' );
    // Google fonts
    wp_register_style( 'landing_page_gh_googlefont', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
    //Custom fonts
    wp_register_style( 'landing_page_gh_simplelineicons', $uri . '/assets/vendor/simple-line-icons/css/simple-line-icons.css' );
    wp_register_style( 'landing_page_gh_allmin', $uri . '/assets/vendor/fontawesome-free/css/all.min.css' );
    // Bootstrap core CSS
    wp_register_style( 'landing_page_gh_bootstrap', $uri . '/assets/vendor/bootstrap/css/bootstrap.min.css' );


    // Enqueue styles
    wp_enqueue_style( 'landing_page_gh_bootstrap' );
    wp_enqueue_style( 'landing_page_gh_simplelineicons' );
    wp_enqueue_style( 'landing_page_gh_allmin' );
    wp_enqueue_style( 'landing_page_gh_pages' );

    /**
     * Register and enqueue scripts
     */

    // Register scripts
    wp_register_script( 'landing_page_gh_jquerymin', $uri . '/assets/vendor/jquery/jquery.min.js', [], false );
    wp_register_script( 'landing_page_gh_bootstrapmin', $uri . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], false );

    // Enqueue scripts
    wp_enqueue_script( 'landing_page_gh_jquerymin' );
    wp_enqueue_script( 'landing_page_gh_bootstrapmin' );

 }