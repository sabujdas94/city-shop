<?php
/**
 * CitySHop Theme Customizer
 *
 * @package CitySHop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function city_shop_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'city_shop_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'city_shop_customize_partial_blogdescription',
		) );
	}


	/* --------- MTT Header PopUp Offer Options Register ------------ */

	$wp_customize->add_panel( 'popup_offers' , array(
        'title'		=> 'PopUp Offers',
        'priority'	=> 1
    ) );
	// popup_offer_home Text Customization
	$wp_customize->add_section('popup_offer_home', array(
		'title' => __('Front Page PopUp Offer', 'city-shop'),
		'panel' => 'popup_offers',
		'priority' => 1
	));
	$wp_customize->add_setting('popup_offer_home_text', array(
		'default' => __('Follow us and Enter into $100 Monthly Prize Draw.', 'city-shop'),
		'transport' => 'refresh'
	));
	$wp_customize->add_control('popup_offer_home_text', array(
		'section' => 'popup_offer_home',
		'label' => __('Enter PopUp Offer Text: (Frontpage)', 'city-shop'),
		'type' => 'text'
	));
	// popup_offer Text Customization
	$wp_customize->add_section('popup_offer', array(
		'title' => __('Without Front Page PopUp Offer', 'city-shop'),
		'panel' => 'popup_offers',
		'priority' => 1
	));
	$wp_customize->add_setting('popup_offer_text', array(
		'default' => __('We Stand Behind all Our Products that\'s why we provide a Lifetime Warranty on all your Purchases.', 'city-shop'),
		'transport' => 'refresh'
	));
	$wp_customize->add_control('popup_offer_text', array(
		'section' => 'popup_offer',
		'label' => __('Enter PopUp Offer Text:', 'city-shop'),
		'type' => 'text'
	));

	/* --------- MTT Footer Options Register ------------ */
	
	$wp_customize->add_section('footer_section', array(
		'title' => __('Footer Options', 'city-shop'),
		'priority' => 10
	));
	// Footer Copyright Text Customization
	$wp_customize->add_setting('copyright_text', array(
		'default' => __('&copy; FINESCITY 2019, ALL RIGHTS RESERVED', 'city-shop'),
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('copyright_text', array(
		'section' => 'footer_section',
		'label' => __('Enter Footer Copyright Text:', 'city-shop'),
		'type' => 'text'
	));
	

}
add_action( 'customize_register', 'city_shop_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function city_shop_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function city_shop_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function city_shop_customize_preview_js() {
	wp_enqueue_script( 'city-shop-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'city_shop_customize_preview_js' );
