<?php
/**
 * teapartyanimal Theme Customizer
 *
 * @package teapartyanimal
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function teapartyanimal_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'teapartyanimal_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function teapartyanimal_customize_preview_js() {
	wp_enqueue_script( 'teapartyanimal_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'teapartyanimal_customize_preview_js' );
