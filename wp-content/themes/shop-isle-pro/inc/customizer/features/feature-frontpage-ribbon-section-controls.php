<?php
/**
 * Customizer functionality for the Ribbon Section.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Hook controls for Ribbon Section to Customizer.
 */
function shop_isle_ribbon_customize_register( $wp_customize ) {

	/*  Ribbon section */

	$wp_customize->add_section(
		'shop_isle_ribbon_section', array(
			'title'    => __( 'Ribbon section', 'shop-isle' ),
			'panel'    => 'shop_isle_front_page_sections',
			'priority' => apply_filters( 'shop_isle_section_priority', 35, 'shop_isle_ribbon_section' ),
		)
	);

	$wp_customize->add_setting(
		'shop_isle_ribbon_hide', array(
			'sanitize_callback' => 'shop_isle_sanitize_checkbox',
			'default'   => true,
		)
	);

	$wp_customize->add_control(
		'shop_isle_ribbon_hide', array(
			'type'        => 'checkbox',
			'label'       => __( 'Hide ribbon section?', 'shop-isle' ),
			'section'     => 'shop_isle_ribbon_section',
			'priority'    => 1,
		)
	);

	/* Text */
	$wp_customize->add_setting(
		'shop_isle_ribbon_text', array(
			'default'           => __( 'Find out more', 'shop-isle' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'shop_isle_sanitize_text',
		)
	);
	$wp_customize->add_control(
		'shop_isle_ribbon_text', array(
			'label'    => __( 'Text', 'shop-isle' ),
			'section'  => 'shop_isle_ribbon_section',
			'priority' => 2,
		)
	);
	/* Ribbon button text */
	$wp_customize->add_setting(
		'shop_isle_ribbon_button_text', array(
			'default'           => __( 'Click to subscribe', 'shop-isle' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'shop_isle_sanitize_text',
		)
	);
	$wp_customize->add_control(
		'shop_isle_ribbon_button_text', array(
			'label'    => __( 'Button Text', 'shop-isle' ),
			'section'  => 'shop_isle_ribbon_section',
			'priority' => 3,
		)
	);
	/* Ribbon button link */
	$wp_customize->add_setting(
		'shop_isle_ribbon_button_link', array(
			'default'           => '#',
			'sanitize_callback' => 'esc_url',
		)
	);
	$wp_customize->add_control(
		'shop_isle_ribbon_button_link', array(
			'label'    => __( 'Button link', 'shop-isle' ),
			'section'  => 'shop_isle_ribbon_section',
			'priority' => 4,
		)
	);
	/* Ribbon background */
	$wp_customize->add_setting(
		'shop_isle_ribbon_background', array(
			'default'           => get_template_directory_uri() . '/assets/images/ribbon-bg.jpg',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'shop_isle_ribbon_background', array(
				'label'    => __( 'Background image', 'shop-isle' ),
				'section'  => 'shop_isle_ribbon_section',
				'priority' => 1,
			)
		)
	);
}

add_action( 'customize_register', 'shop_isle_ribbon_customize_register' );
