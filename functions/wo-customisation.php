<?php
/**
* Author: Daniel Pearce
* URL: http://mediamurph.com
*
* JointsWP-child theme customisation
* 
* @link https://codex.wordpress.org/Theme_Development
* @package JointsWP-child
* 
* https://www.sitepoint.com/using-the-wordpress-customizer-media-controls/
* 
*/

// Add SETTINGS / SECTIONS / CONTROLS

function wo_customize_register( $wp_customize ) {
    
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    
    // ------------------
    // SECTIONS
    
    $wp_customize->add_section( 'wo_carousel_section', array(
        'title'         => __( 'Banner Carousel', 'jointswp-child' ),
        'description'   => __( '<h1><b style="color:red;">BEWARE: This facility is in development!</b></h1><h2>Manage the images in the carousel</h2><p>The images should be at least <b>450px</b> by <b>300px</b>!</p>', 'jointswp-child' ),
        'capability'    => 'edit_theme_options', 
        'priority'      => 160,
    ) );
    
    $wp_customize->add_section( 'wo_social_media_section', array(
        'title'         => __( 'Social Media Links', 'jointswp-child' ),
        'description'   => __( '<p>Currently, only Facebook and Twiiter.</p>', 'jointswp-child' ),
        'capability'    => 'edit_theme_options', 
        'priority'      => 170,
    ) );
    
    // ------------------
    // SETTINGS
    
    $wp_customize->add_setting( 'wo_carousel_variable_one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        //'sanitize_callback' => 'absint',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_carousel_variable_two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        //'sanitize_callback' => 'absint',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_carousel_variable_three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        //'sanitize_callback' => 'absint',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_carousel_variable_four', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        //'sanitize_callback' => 'absint',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_carousel_variable_five', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        //'sanitize_callback' => 'absint',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_facebook_link', array(
        'default'           => 'https://www.facebook.com',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => '',
        'transport'         => 'refresh'
    ) );
    
    $wp_customize->add_setting( 'wo_twitter_link', array(
        'default'           => 'https://twitter.com',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => '',
        'transport'         => 'refresh'
    ) );
    
    // ------------------
    // CONTROLS
    
    //$wp_customize->add_control( new WP_Customize_Control( 
    $wp_customize->add_control( new WP_Customize_Media_Control( 
        $wp_customize, 
        'wo_carousel_variable_one', 
        array(
            'label'     => __( 'Image 1', 'jointswp-child' ),
            'section'   => 'wo_carousel_section',
            'mime_type' => 'image'
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( 
        $wp_customize, 
        'wo_carousel_variable_two', 
        array(
            'label'     => __( 'Image 2', 'jointswp-child' ),
            'section'   => 'wo_carousel_section',
            'mime_type' => 'image'
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( 
        $wp_customize, 
        'wo_carousel_variable_three', 
        array(
            'label'     => __( 'Image 3', 'jointswp-child' ),
            'section'   => 'wo_carousel_section',
            'mime_type' => 'image'
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( 
        $wp_customize, 
        'wo_carousel_variable_four', 
        array(
            'label'     => __( 'Image 4', 'jointswp-child' ),
            'section'   => 'wo_carousel_section',
            'mime_type' => 'image'
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( 
        $wp_customize, 
        'wo_carousel_variable_five', 
        array(
            'label'     => __( 'Image 5', 'jointswp-child' ),
            'section'   => 'wo_carousel_section',
            'mime_type' => 'image'
    ) ) );
    
    $wp_customize->add_control( 
        'wo_facebook_link', 
        array(
            'type'      => 'text',
            'label'     => __( 'Facebook Link', 'jointswp-child' ),
            'section'   => 'wo_social_media_section',
            'priority'  => 1
    ) );
    
    $wp_customize->add_control( 
        'wo_twitter_link', 
        array(
            'type'      => 'text',
            'label'     => __( 'Twitter Link', 'jointswp-child' ),
            'section'   => 'wo_social_media_section',
            'priority'  => 2
    ) );
    
    // ------------------
    
}
add_action( 'customize_register', 'wo_customize_register' );

?>