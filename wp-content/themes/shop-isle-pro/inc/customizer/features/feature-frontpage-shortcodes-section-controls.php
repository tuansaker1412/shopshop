<?php
/**
 * Customizer functionality for the Shortcodes Section.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Hook controls for Shortcodes Section to Customizer.
 */
function shop_isle_shortcodes_customize_register( $wp_customize ) {

	/* Shortcodes section */

	$wp_customize->add_section(
		'shop_isle_shortcodes_section', array(
			'title'    => esc_html__( 'Shortcodes section', 'shop-isle' ),
			'priority' => apply_filters( 'shop_isle_section_priority', 50, 'shop_isle_shortcodes_section' ),
			'panel'    => 'shop_isle_front_page_sections',
		)
	);

	$wp_customize->add_setting(
		'shop_isle_shortcodes_hide', array(
			'sanitize_callback' => 'shop_isle_sanitize_checkbox',
			'default'           => true,
		)
	);

	$wp_customize->add_control(
		'shop_isle_shortcodes_hide', array(
			'type'        => 'checkbox',
			'label'       => __( 'Hide shortcodes section?', 'shop-isle' ),
			'section'     => 'shop_isle_shortcodes_section',
			'priority'    => 1,
		)
	);

	$wp_customize->add_setting( 'shop_isle_shortcodes_settings' );
	$wp_customize->add_control(
		new Shop_Isle_Repeater_Controler(
			$wp_customize, 'shop_isle_shortcodes_settings', array(
				'label'                       => esc_html__( 'Edit the shortcode options', 'shop-isle' ),
				'section'                     => 'shop_isle_shortcodes_section',
				'shop_isle_text_control'      => true,
				'shop_isle_subtext_control'   => true,
				'shop_isle_shortcode_control' => true,
			)
		)
	);
}

add_action( 'customize_register', 'shop_isle_shortcodes_customize_register' );
