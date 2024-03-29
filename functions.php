<?php

/**
 * CitySHop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CitySHop
 */

if (!function_exists('city_shop_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function city_shop_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CitySHop, use a find and replace
		 * to change 'city-shop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('city-shop', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');



		if (function_exists('register_nav_menus')) {
			register_nav_menus(array(
				'header_left_menu' => esc_html__('Header Left Menu', 'city-shop'),
				'header_left_mobile_menu' => esc_html__('Header Left Mobile Menu', 'city-shop'),
				'header_right_menu' => esc_html__('Header Right Menu', 'city-shop'),
				'footer_menu' => esc_html__('Footer Menu', 'city-shop')
			));
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('city_shop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'city_shop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function city_shop_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('city_shop_content_width', 640);
}
add_action('after_setup_theme', 'city_shop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function city_shop_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'city-shop'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'city-shop'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Top Sidebar Description', 'city-shop'),
		'id'            => 'footer-top-description-sidebar',
		'description'   => esc_html__('Add widgets here.', 'city-shop'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="mtt-footer-title">',
		'after_title'   => '</h6>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Top Sidebar', 'city-shop'),
		'id'            => 'footer-top-sidebar',
		'description'   => esc_html__('Add widgets here.', 'city-shop'),
		'before_widget' => '<div class="col-md-4 col-6"><section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section></div>',
		'before_title'  => '<h6 class="mtt-footer-title">',
		'after_title'   => '</h6>',
	));
}
add_action('widgets_init', 'city_shop_widgets_init');

/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/enqueue.php';

/**
 * Enqueue MTT Menu Walker Class
 */

require get_template_directory() . '/inc/walker-nav-menu.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * City shop Shortcode.
 */
require get_template_directory() . '/inc/shortcode.php';
require get_template_directory() . '/inc/wc-shortcode.php';
require get_template_directory() . '/inc/wholesale_query_hook.php';

remove_filter('the_content', 'wpautop');

function city_shop_controll_page_access() {
	global $wp;
	if('my-account/lost-password' == $wp->request){
		return;
	}
	if (is_user_logged_in()){
		if( is_page('Login') || is_page('Register') ){
			wp_redirect( get_permalink( get_page_by_path('my-account') ) );
        	die;
		}
	}
	if (!is_user_logged_in()){
		global $wp;
		if('my-account/lost-password' == $wp->request){
			return;
		}
		if( is_page('my-account') ){
			wp_redirect( get_permalink( get_page_by_path('login') ) );
        	die;
		}
	}
}
add_action('template_redirect','city_shop_controll_page_access',1);

function city_shop_products() {
	// NOTICE! Understand what this does before running. 
	return get_posts( array(
	  'posts_per_page' => -1,
	  'post_type' => array('product','product_variation'),
	  'fields' => 'all',
	) );
}

/**
 * Remove woocommerce the breadcrumbs 
 */
add_action( 'init', 'mtt_remove_some_plugin_action' );
function mtt_remove_some_plugin_action() {
    remove_action( 'admin_menu', array( 'STCFQ_Admin_Menu', 'create_menu' ) );
}

remove_filter( 'the_content', 'wpautop' ); 
remove_filter( 'the_excerpt', 'wpautop' );

/* Enter your custom functions here */ // Remove the additional information tab
function mtt_woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'mtt_woo_remove_product_tabs', 98 );

//* Remove non-breaking space from beginning of paragraph
add_filter( 'the_excerpt', function( $excerpt ) {
  return str_replace( [ '<p>&nbsp; ', '<p>&nbsp;' ], '<p>', $excerpt );
}, 999, 1 );

add_filter( 'the_content', function( $excerpt ) {
  return str_replace( [ '<p>&nbsp; ', '<p>&nbsp;' ], '<p>', $excerpt );
}, 999, 1 );

add_filter( 'woocommerce_product_subcategories_args', 'remove_uncategorized_category' );
/**
 * Remove uncategorized category from shop page.
 *
 * @param array $args Current arguments.
 * @return array
 **/
function remove_uncategorized_category( $args ) {
  $uncategorized = get_option( 'default_product_cat' );
  die($uncategorized);
  $args['exclude'] = $uncategorized;
  return $args;
}