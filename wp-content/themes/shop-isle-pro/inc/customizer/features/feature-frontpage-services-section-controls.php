<?php
/**
 * Customizer functionality for the Services Section.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Hook controls for Services Section to Customizer.
 */
function shop_isle_services_customize_register( $wp_customize ) {

	/* Services section */

	$wp_customize->add_section(
		'shop_isle_services_section', array(
			'title'    => __( 'Services section', 'shop-isle' ),
			'panel'    => 'shop_isle_front_page_sections',
			'priority' => apply_filters( 'shop_isle_section_priority', 30, 'shop_isle_services_section' ),
		)
	);

	$wp_customize->add_setting(
		'shop_isle_services_hide', array(
			'sanitize_callback' => 'shop_isle_sanitize_checkbox',
			'default'   => true,
		)
	);

	$wp_customize->add_control(
		'shop_isle_services_hide', array(
			'type'        => 'checkbox',
			'label'       => __( 'Hide services section?', 'shop-isle' ),
			'section'     => 'shop_isle_services_section',
			'priority'    => 1,
		)
	);

	/* Title */
	$wp_customize->add_setting(
		'shop_isle_services_title', array(
			'default'           => __( 'Our Services', 'shop-isle' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'shop_isle_sanitize_text',
		)
	);
	$wp_customize->add_control(
		'shop_isle_services_title', array(
			'label'    => __( 'Title', 'shop-isle' ),
			'section'  => 'shop_isle_services_section',
			'priority' => 2,
		)
	);
	/* Subtitle */
	$wp_customize->add_setting(
		'shop_isle_services_subtitle', array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'shop_isle_sanitize_text',
		)
	);
	$wp_customize->add_control(
		'shop_isle_services_subtitle', array(
			'label'    => __( 'Subtitle', 'shop-isle' ),
			'section'  => 'shop_isle_services_section',
			'priority' => 3,
		)
	);
	/* Service */
	$wp_customize->add_setting(
		'shop_isle_service_box', array(
			'transport'         => 'postMessage',
			'sanitize_callback' => '',
			'default'           => json_encode(
				array(
					array(
						'icon_value' => 'icon_gift',
						'text'       => 'Social icons',
						'subtext'    => 'Ideas and concepts',
						'link'       => '#',
					),
					array(
						'icon_value' => 'icon_pin',
						'text'       => 'WooCommerce',
						'subtext'    => 'Top Rated Products',
						'link'       => '#',
					),
					array(
						'icon_value' => 'icon_star',
						'text'       => 'Highly customizable',
						'subtext'    => 'Easy to use',
						'link'       => '#',
					),
				)
			),
		)
	);
	$wp_customize->add_control(
		new Shop_Isle_Repeater_Controler(
			$wp_customize, 'shop_isle_service_box', array(
				'label'                     => __( 'Add new service box', 'shop-isle' ),
				'section'                   => 'shop_isle_services_section',
				'priority'                  => 4,
				'shop_isle_icon_control'    => true,
				'shop_isle_text_control'    => true,
				'shop_isle_subtext_control' => true,
				'shop_isle_link_control'    => true,
				'shop_isle_box_label'       => __( 'Service box', 'shop-isle' ),
				'shop_isle_box_add_label'   => __( 'Add new service box', 'shop-isle' ),
			)
		)
	);

}

add_action( 'customize_register', 'shop_isle_services_customize_register' );
