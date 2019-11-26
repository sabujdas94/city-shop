<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package CitySHop
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function city_shop_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'city_shop_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function city_shop_woocommerce_scripts() {
	wp_enqueue_style( 'city-shop-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'city-shop-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'city_shop_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function city_shop_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'city_shop_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function city_shop_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'city_shop_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function city_shop_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'city_shop_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function city_shop_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'city_shop_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function city_shop_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'city_shop_woocommerce_related_products_args' );

if ( ! function_exists( 'city_shop_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function city_shop_woocommerce_product_columns_wrapper() {
		$columns = city_shop_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'city_shop_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'city_shop_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function city_shop_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'city_shop_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'city_shop_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function city_shop_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'city_shop_woocommerce_wrapper_before' );

if ( ! function_exists( 'city_shop_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function city_shop_woocommerce_wrapper_after() {
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'city_shop_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'city_shop_woocommerce_header_cart' ) ) {
			city_shop_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'city_shop_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function city_shop_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		city_shop_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'city_shop_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'city_shop_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	// <li class="nav-item"></li>
	function city_shop_woocommerce_cart_link() {
		?>
			<a class="nav-link menu-cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'city-shop' ); ?>">Cart <span>&bull;</span> <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span><svg version="1.1" viewBox="0 0 431 535" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><g transform="translate(2)"><path d="m77.446 532.48c-4.1024-0.31146-4.9918-0.62776-3.5-1.2447 1.6748-0.69267 1.4897-0.8386-1.1381-0.89745-5.4914-0.123-20.591-5.0577-28.72-9.3861-19.82-10.553-34.943-29.389-39.087-48.684-0.76782-3.575-1.498-5.6-1.6226-4.5-0.60003 5.2978-1.4277-10.906-0.86833-17 0.3534-3.85 0.75644-5.65 0.89565-4s6.9146-71.413 15.056-162.36c8.1418-90.949 15.108-166.98 15.48-168.97 0.89214-4.7555 7.6872-11.573 13.007-13.05 2.4983-0.69356 14.768-1.1116 32.728-1.1151l28.731-6e-3 0.49624-2.25c0.27294-1.2375 0.98417-5.175 1.5805-8.75 7.428-44.529 42.859-80.456 87.295-88.519 3.9412-0.71513 6.2659-1.4116 5.1659-1.5478-1.1-0.13617 1.15-0.56431 5-0.95141 7.9599-0.80033 25.914-4e-3 22.995 1.0203-1.2798 0.44892-0.0294 0.89504 3.7552 1.3398 12.78 1.5021 31.943 9.3917 44.75 18.424 14.366 10.132 28.77 27.652 36.076 43.88 3.1645 7.0289 7.2737 21.348 8.4238 29.354 1.2679 8.8265-1.8645 7.9993 30.318 8.0056 16.929 3e-3 30.231 0.43544 32.46 1.0546 4.6197 1.2829 9.9649 5.8233 12.065 10.248 1.1688 2.4631 5.3028 45.451 16.361 170.13 8.1384 91.76 15.052 165.54 15.364 163.95 0.87217-4.4414 1.5988 10.203 0.85402 17.211-0.34493 3.2455-0.72908 5.0008-0.85367 3.9008s-0.85474 0.925-1.6226 4.5c-1.7434 8.1172-7.9454 20.713-13.896 28.222-6.0431 7.6256-16.156 15.83-25.51 20.697-8.039 4.1824-23.092 9.0328-28.401 9.1517-2.5229 0.0565-2.7544 0.22035-1.181 0.83575 1.302 0.50923-0.67328 0.98782-5.9009 1.4297-8.3253 0.70375-267.18 0.58836-276.56-0.12327zm285.71-41.846c8.6768-2.9797 14.075-6.3644 19.641-12.315 6.1138-6.5361 8.851-12.683 8.8772-19.935 0.0318-8.8259-27.207-313.35-28.254-315.87-0.92116-2.2153-1.2133-2.25-18.922-2.25-16.759 0-18.057 0.13198-19.021 1.9343-0.61571 1.1505-1.0352 10.131-1.0352 22.162 0 19.753-0.0585 20.328-2.4912 24.479-7.7189 13.171-27.259 11.99-33.629-2.0337-1.5828-3.4844-1.8388-6.8045-1.8577-24.091-0.0156-14.235-0.36998-20.398-1.222-21.25-0.9097-0.9097-17.576-1.2-68.893-1.2-60.805 0-67.755 0.16096-68.3 1.5818-0.33385 0.86998-0.61687 10.432-0.62895 21.25-0.0189 16.916-0.27881 20.234-1.8577 23.71-6.5348 14.386-27.013 15.107-34.312 1.2075-2.0465-3.897-2.2759-6.0295-2.7698-25.749l-0.53842-21.5-18.109-0.27201c-13.723-0.20613-18.356 0.0361-19.126 1-1.0529 1.3173-28.538 306.93-28.499 316.89 0.0286 7.2525 2.7672 13.401 8.8791 19.935 7.1574 7.6518 15.468 11.949 26.855 13.888 2.75 0.4681 66.65 0.78579 142 0.70597l137-0.14513zm-78.001-391.06c1.0394-2.7086-2.346-14.092-6.9312-23.306-3.2906-6.6125-6.0161-10.276-12.274-16.5-8.9993-8.9495-15.985-13.475-26.377-17.09-14.721-5.1194-30.533-5.1214-45.244-6e-3 -10.409 3.6198-17.39 8.1419-26.393 17.095-8.964 8.9144-15.127 19.612-18.18 31.556-2.8144 11.011-10.022 9.944 67.187 9.944 62.573 0 67.611-0.12511 68.213-1.694z" fill="#2e5c84"/></g></svg></a>
		<?php
	}
}

if ( ! function_exists( 'city_shop_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function city_shop_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
			<li class="nav-item <?php echo esc_attr( $class ); ?>">
				<?php city_shop_woocommerce_cart_link(); ?>
				<div id="site-header-cart" class="site-header-cart">
					<div class="position-relative">
						<div class="cart-popup-title">
							<h4>Your Cart Has <?php echo WC()->cart->get_cart_contents_count(); ?> Items</h4>
							<button class="close-cart-widget" id="close-cart-widget">X</button>
						</div>
						<?php
						$instance = array(
							'title' => '',
						);

						the_widget( 'WC_Widget_Cart', $instance );
						?>
						
					</div>
				</div>
			</li>

		<?php
	}
}



/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'mtt_loop_columns', 999);
if (!function_exists('mtt_loop_columns')) {
	function mtt_loop_columns() {
		return 4; // 3 products per row
	}
}

/**
* Get the product thumbnail for the loop.
*/
function mtt_woocommerce_template_loop_product_thumbnail() {
	echo '<div class="mtt_product_thumb_wrapper">';
	echo woocommerce_get_product_thumbnail(); // WPCS: XSS ok.
	echo '</div>';
}
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'mtt_woocommerce_template_loop_product_thumbnail', 10);

/**
 * Remove woocommerce the breadcrumbs 
 */
add_action( 'init', 'mtt_woocommerce_remove_actions' );
function mtt_woocommerce_remove_actions() {

    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0 );

    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

	remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	remove_theme_support( 'wc-product-gallery-zoom' );
	remove_theme_support( 'wc-product-gallery-slider' );
}


add_action('woocommerce_before_add_to_cart_quantity', 'mtt_woocommerce_before_add_to_cart_quantity');
function mtt_woocommerce_before_add_to_cart_quantity()
{
	?>
	<div class="input-group add-to-cart mb-3">
		<label for="" class="text-uppercase small">Quantity</label>
	  	<div class="input-group-prepend btn-number cart-area" data-type="minus" data-field="input-qty">
	    	<span class="input-group-text">-</span>
	  	</div>
	<?php
}
add_action('woocommerce_after_add_to_cart_quantity', 'mtt_woocommerce_after_add_to_cart_quantity');
function mtt_woocommerce_after_add_to_cart_quantity()
{
	?>
	  	<div class="input-group-append btn-number cart-area" data-type="plus" data-field="input-qty">
	    	<span class="input-group-text">+</span>
	  	</div>
	</div>
	<?php
}

/**
 * adding custom woocommerce field placeholder
 */

 add_filter( 'woocommerce_checkout_fields' , 'mtt_override_billing_checkout_fields', 20, 1 );
 function mtt_override_billing_checkout_fields( $fields ) {

     $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
     $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
     $fields['billing']['billing_company']['placeholder'] = 'Company Name';
     $fields['billing']['billing_postcode']['placeholder'] = 'Postal/ZIIP Code';
     $fields['billing']['billing_phone']['placeholder'] = 'Phone';
     $fields['billing']['billing_city']['placeholder'] = 'City';
     $fields['billing']['billing_country']['placeholder'] = 'Country';
     $fields['billing']['billing_state']['placeholder'] = 'State';
     $fields['billing']['billing_email']['placeholder'] = 'Email';


     $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name';
     $fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name';
     $fields['shipping']['shipping_company']['placeholder'] = 'Company Name';
     $fields['shipping']['shipping_postcode']['placeholder'] = 'Postal/ZIIP Code';
     $fields['shipping']['shipping_phone']['placeholder'] = 'Phone';
     $fields['shipping']['shipping_city']['placeholder'] = 'City';
     $fields['shipping']['shipping_country']['placeholder'] = 'Country';
     $fields['shipping']['shipping_state']['placeholder'] = 'State';
     $fields['shipping']['billing_email']['placeholder'] = 'Email';

     return $fields;
 }


/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 2; // arranged in 1 columns
	return $args;
}