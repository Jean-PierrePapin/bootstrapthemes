<?php

/**
 * Using the customizer file to change the parts in the landing page
 */

function landing_page_customizer( $wp_customize ) {

    /** 
     * Header Section 
     */ 
    $wp_customize->add_section(
        'sec_header', [
            'title'                 =>  __( 'Header and Masthead Settings', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Header and Masthead Sections', 'landing-page-gh-pages' )
        ]
    );

    // Field 1 - masthead title  box
    $wp_customize->add_setting(
        'set_masthead_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_masthead_title', [
            'label'                 =>  __( 'Masthead Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Masthead title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - Header title  box
    $wp_customize->add_setting(
        'set_header_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_header_title', [
            'label'                 =>  __( 'Header Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Header title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - Header sign in button
    $wp_customize->add_setting(
        'set_signinbutton_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_signinbutton_title', [
            'label'                 =>  __( 'Sign in Button Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Sign in Button title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

       
    // Sign up button Section
    $wp_customize->add_section(
        'sec_signupbutton', [
            'title'                 =>  __( 'Sign up Button Settings', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Sign up Button Section', 'landing-page-gh-pages' )
        ]
    );

    // Field 1 - Sign up button title box
    $wp_customize->add_setting(
        'set_signupbutton_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_signupbutton_title', [
            'label'                 =>  __( 'Sign up Button Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Sign up Button title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

    /*------------------------------------------------------*/
    /*------------------------------------------------------*/

    /** 
    * Copyright Section 
    */ 
    $wp_customize->add_section(
        'sec_copyright', [
            'title'                 =>  __( 'Copyright Settings', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Copyright Section', 'landing-page-gh-pages' )
        ]
    );

    // Field 1 - Copyright title  box
    $wp_customize->add_setting(
        'set_copyright_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_copyright_title', [
            'label'                 =>  __( 'Copyright Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Copyright title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_copyright',
            'type'                  =>  'text'
        ]
    );

    /*------------------------------------------------------*/
    /*------------------------------------------------------*/

    /** 
    * Icon Section 
    */ 
    $wp_customize->add_section(
        'sec_icon', [
            'title'                 =>  __( 'Icon Settings', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Icon Section', 'landing-page-gh-pages' )
        ]
    );

    // Field 1 - Icon box 1
    $wp_customize->add_setting(
        'set_icon_title1', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_title1', [
            'label'                 =>  __( 'Icon 1', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon bootstrap class 1 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - Icon subtitle box 1
    $wp_customize->add_setting(
        'set_icon_subtitle1', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_subtitle1', [
            'label'                 =>  __( 'Icon subtitle 1', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon subtitle 1 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - Icon text box 1
    $wp_customize->add_setting(
        'set_icon_text1', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_text1', [
            'label'                 =>  __( 'Icon text 1', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon text 1 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );


    // Field 1 - Icon box 2
    $wp_customize->add_setting(
        'set_icon_title2', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_title2', [
            'label'                 =>  __( 'Icon 2', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon bootstrap class 2 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - Icon subtitle box 2
    $wp_customize->add_setting(
        'set_icon_subtitle2', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_subtitle2', [
            'label'                 =>  __( 'Icon subtitle 2', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon subtitle 2 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - Icon text box 2
    $wp_customize->add_setting(
        'set_icon_text2', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_text2', [
            'label'                 =>  __( 'Icon text 2', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon text 2 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );


    // Field 1 - Icon box 3
    $wp_customize->add_setting(
        'set_icon_title3', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_title3', [
            'label'                 =>  __( 'Icon 3', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon bootstrap class 3 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - Icon subtitle box 3
    $wp_customize->add_setting(
        'set_icon_subtitle3', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_subtitle3', [
            'label'                 =>  __( 'Icon subtitle 3', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon subtitle 3 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - Icon text box 3
    $wp_customize->add_setting(
        'set_icon_text3', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_icon_text3', [
            'label'                 =>  __( 'Icon text 3', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your Icon text 3 below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_icon',
            'type'                  =>  'text'
        ]
    );

    /*------------------------------------------------------*/
    /*------------------------------------------------------*/

    /** 
     * Call to action Section 
     */ 
    $wp_customize->add_section(
        'sec_cta', [
            'title'                 =>  __( 'CTA Settings', 'landing-page-gh-pages' ),
            'description'           =>  __( 'CTA Section', 'landing-page-gh-pages' )
        ]
    );

    // Field 1 - CTA title  box
    $wp_customize->add_setting(
        'set_cta_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_cta_title', [
            'label'                 =>  __( 'CTA Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your CTA title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_cta',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - CTA sign up box
    $wp_customize->add_setting(
        'set_cta_signup_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_cta_signup_title', [
            'label'                 =>  __( 'CTA Title', 'landing-page-gh-pages' ),
            'description'           =>  __( 'Please, add your CTA title below', 'landing-page-gh-pages' ),
            'section'               =>  'sec_cta',
            'type'                  =>  'text'
        ]
    );


    /*------------------------------------------------------*/
    /*------------------------------------------------------*/

    

}
add_action( 'customize_register', 'landing_page_customizer' );