<?php
/**
 * Checkout Form
 *
 * ================ Edited by MTT ==================
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-7">
		<div class="mtt-checkout-page-content">
			<div class="mtt-checkout-page-logo">
				<?php city_shop_post_thumbnail(); ?>
			</div>

			<?php //do_action( 'woocommerce_before_checkout_form', $checkout ); ?>

				<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

					<?php if ( $checkout->get_checkout_fields() ) : ?>
						<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
						<div class="col2-set" id="customer_details">
							<div class="col-12 p-0">
								<h4 class="mtt-checkout-form-title mt-4 mb-5"><?php esc_html_e( '01 CONTACT INFORMATION', 'woocommerce' ); ?></h4>
								<?php do_action( 'woocommerce_checkout_billing' ); ?>
							</div>

							<div class="col-12 p-0 mtt-shipping-tab-col">
								<h4 id="order_review_heading" class="mtt-checkout-form-title"><?php esc_html_e( '03 DELIVERY ', 'woocommerce' ); ?></h4>
							</div>
						</div>

						<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

					<?php endif; ?>
					
					<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
					
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
					<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

				</form>
			
			<?php //do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
		</div>
	</div>


	<div class="col-md-4">
		<div class="mtt-checkout-right-sidear">
			<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<tbody>
					<?php do_action( 'woocommerce_before_cart_contents' ); ?>

					<?php
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
							$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
							?>
							<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

								<td class="product-thumbnail">
								<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $product_permalink ) {
									echo $thumbnail; // PHPCS: XSS ok.
								} else {
									printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
								}
								?>
								</td>

								<td class="product-name product-price product-quantity product-subtotal" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">

									<?php
									if ( ! $product_permalink ) {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
									} else {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
									}

									do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

									// Meta data.
									echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

									// Backorder notification.
									if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
									}
									?>

									<div class="row">
										<div class="col-7">
											Price:
											<?php
												echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
											?>
											Quantity:
											<?php echo $cart_item['quantity']; ?>
										
										</div>
										<div class="col-5">
											Total:
											<?php
										echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
									?>
										</div>
									</div>

								</td>


							</tr>
							<?php
						}
					}
					?>
				</tbody>
			</table>

			<div class="mtt-woo-checkout-subtotal">
				<div class="row">
					<div class="col-6">
						<?php esc_html_e( 'Subtotal', 'woocommerce' ); ?>
					</div>
					<div class="col-6">
						<?php wc_cart_totals_subtotal_html(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<?php esc_html_e( 'Shipping Priority', 'woocommerce' ); ?>
					</div>
					<div class="col-6">
						<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo WC()->cart->shipping_total; ?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-6 mt-3 mtt-checkout-estimated-total-txt">
						<?php esc_html_e( 'Estimated Total', 'woocommerce' ); ?>
					</div>
					<div class="col-6 mt-3 mtt-checkout-estimated-total-amount">
						<?php wc_cart_totals_order_total_html(); ?>
					</div>
				</div>
				
			</div><!--  .mtt-woo-checkout-subtotal -->

		</div>
	</div>
</div>