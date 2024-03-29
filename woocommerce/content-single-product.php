<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0zz
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <div class="mtt-single-woo-product-gallery">
        <?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_before_single_product_summary');
		?>
        <div class="mtt-product-gallery-cat">
            <div class="mtt-categories text-center">
                <div class="row">
                    <div class="col">
                        <div class="mtt-category">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt="">
                            <h6>HEALTHY</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mtt-fitness-product mtt-category">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon2.png"
                                    alt="">
                            <h6>STRONG</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mtt-fitness-product mtt-category">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt="">
                            <h6>LIGHWEIGHT</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mtt-fitness-product mtt-category">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon4.png"
                                    alt="">
                            <h6>ECO-FRIENDLY</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="summary entry-summary">
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action('woocommerce_single_product_summary');
		?>
        <div class="mtt-product-checkout">
            <h6 class="font-weight-bold">SECURE AND TRUSTED CHECKOUT WITH:</h6>
            <ul>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/visa.png" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/master-card.png" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/american-express.png" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/jcb.png" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/paypal.png" alt=""></li>
            </ul>
        </div>
        <div class="mtt-single-product-accordion">
            <div class="accordion" id="productAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">FEATURES <span class="card-positive">+</span><span class="card-negative">-</span></button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#productAccordion">
                        <div class="card-body"><?php echo nl2br(get_field('features')); ?></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">SPECIFICATIONS <span class="card-positive">+</span><span class="card-negative">-</span></button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#productAccordion">
                        <div class="card-body">
                            <?php echo nl2br(get_field('specification')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mtt share icon -->
        <?php mtt_share_this(); ?>
    </div>

    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>