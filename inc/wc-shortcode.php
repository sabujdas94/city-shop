<?php
/**
 * WooCommerce Shortcode For this theme
 *
 * @link https://woocommerce.com/
 *
 * @package CitySHop
 */


function mtt_product_by_id_shortcode( $atts = array() ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
		'include' => '454',
	), $atts, 'mtt_product_by_id' );

	// if(!empty($atts['include'])){
	// 	$args = array(
	// 	    'include' => explode(',', $atts['include']),
	// 	);
	// 	$products = wc_get_products( $args );
	// }

	// do shortcode actions here
	ob_start();
	?>
		<?php echo do_shortcode('[products limit="4" columns="4" category="indoor-titanium-products" orderby="id" order="desc"  ]'); ?>
	<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_product_by_id', 'mtt_product_by_id_shortcode' );