<?php
/**
 * Altar Theme Customizer
 *
 * @package Altar
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function altar_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'altar_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'altar_customize_partial_blogdescription',
		) );
	}


	/* adding sections for social options */

	$wp_customize->add_section( 'altar-socialicon', array(
	    'title' => esc_html__( 'Footer Social Icons', 'altar' ),
	) );


    $wp_customize->add_setting( 'altar_facebook_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_facebook_url', array(
        'label'		=> esc_html__( 'Facebook', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_facebook_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_twitter_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_twitter_url', array(
        'label'		=> esc_html__( 'Twitter', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_twitter_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_gplus_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_gplus_url', array(
        'label'		=> esc_html__( 'Google Plus', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_gplus_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_linkedin_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_linkedin_url', array(
        'label'		=> esc_html__( 'LinkedIn', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_linkedin_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_youtube_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_youtube_url', array(
        'label'		=> esc_html__( 'Youtube', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_youtube_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_pinterest_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_pinterest_url', array(
        'label'		=> esc_html__( 'Pinterest', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_pinterest_url',
        'type'	  	=> 'url',
    ) );

    $wp_customize->add_setting( 'altar_instagram_url', array(
    	'sanitize_callback' => 'esc_url_raw' 
    ) );

    $wp_customize->add_control( 'altar_instagram_url', array(
        'label'		=> esc_html__( 'Instagram', 'altar' ),
        'section'   => 'altar-socialicon',
        'settings'  => 'altar_instagram_url',
        'type'	  	=> 'url',
    ) );

    /* adding sections for Copyright options */

    $wp_customize->add_section( 'altar-copyright', array(
        'title' => esc_html__( 'CopyRight Text', 'altar' ),
    ) );


    $wp_customize->add_setting( 'altar_copyright_text', array(
        'sanitize_callback' => 'sanitize_text_field' 
    ) );

    $wp_customize->add_control( 'altar_copyright_text', array(
        'label'     => esc_html__( 'Copyright Text', 'altar' ),
        'section'   => 'altar-copyright',
        'settings'  => 'altar_copyright_text',
        'type'      => 'text',
    ) );

}
add_action( 'customize_register', 'altar_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function altar_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function altar_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function altar_customize_preview_js() {
	wp_enqueue_script( 'altar-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'altar_customize_preview_js' );
