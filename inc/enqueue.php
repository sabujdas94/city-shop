<?php

/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package CitySHop
 */ 


/**
 * Enqueue styles
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of styles names on which this style depends
 * @param string|bool $ver (optional) Style version (used for cache busting), set to null to disable
 * @param string $media (optional) The media for which this stylesheet has been defined. Accepts media types like 'all', 
 * 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'. Default value: 'all'
 */
function city_shop_styles() {
	wp_enqueue_style( 'bs4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

	wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style( 'slick-theme', 'https://kenwheeler.github.io/slick/slick/slick-theme.css');

	wp_enqueue_style( 'mmenu-css', get_template_directory_uri() . '/mmenu/dist/mmenu.css');

	if ( is_product() ){
		wp_enqueue_style( 'flickity', get_template_directory_uri() . '/css/flickity.min.css');
	}

	wp_enqueue_style( 'city-shop-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'city_shop_styles' );


function city_shop_scripts() {

	wp_enqueue_script( 'bs4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '20203', true );

	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '20203', true );

	wp_enqueue_script( 'city-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'city-shop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'mmenu-js-polyfills', get_template_directory_uri() . '/mmenu/dist/mmenu.polyfills.js', array(), '20202', true );

	//wp_enqueue_script( 'mmenu-js', get_template_directory_uri() . '/mmenu/dist/mmenu.js', array(), '20201', true );

	if ( is_product() ){
		wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '202020', true);
	}
	
	wp_enqueue_script( 'city-shop-js', get_template_directory_uri() . '/js/city-shop.js', array('jquery', 'slick'), '202020', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'city_shop_scripts' );