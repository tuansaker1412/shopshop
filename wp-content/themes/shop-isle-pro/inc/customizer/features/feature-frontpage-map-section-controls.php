<?php
/**
 * Customizer functionality for the Map Palette.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Hook controls for Map section to Customizer.
 */
function shop_isle_map_customize_register( $wp_customize ) {

	/* Map section */

	$wp_customize->add_section(
		'shop_isle_map_section', array(
			'title'    => __( 'Map section', 'shop-isle' ),
			'panel'    => 'shop_isle_front_page_sections',
			'priority' => apply_filters( 'shop_isle_section_priority', 40, 'shop_isle_map_section' ),
		)
	);

	$wp_customize->add_setting(
		'shop_isle_map_hide', array(
			'sanitize_callback' => 'shop_isle_sanitize_checkbox',
			'default'   => true,
		)
	);

	$wp_customize->add_control(
		'shop_isle_map_hide', array(
			'type'        => 'checkbox',
			'label'       => __( 'Hide map section?', 'shop-isle' ),
			'section'     => 'shop_isle_map_section',
			'priority'    => 1,
		)
	);

	/* Shortcode */
	$wp_customize->add_setting(
		'shop_isle_map_shortcode', array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'shop_isle_map_shortcode', array(
			'label'       => __( 'Map shortcode', 'shop-isle' ),
			'description' => __( 'To use this section please install ', 'shop-isle' ) . '<a href="https://wordpress.org/plugins/intergeo-maps/">Intergeo Maps</a>' . __( ' plugin then use it to create a map and paste here the shortcode generated', 'shop-isle' ),
			'section'     => 'shop_isle_map_section',
			'priority'    => 2,
		)
	);
}

add_action( 'customize_register', 'shop_isle_map_customize_register' );
