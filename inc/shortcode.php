<?php
/**
 * CitySHop Shortcodes
 *
 * @package CitySHop
 */

/**
 * @return MTT Popup Offers HTML content to display the shortcode.
 */
function mtt_popup_offer_shortcode() {
	ob_start();

	if(is_front_page()):
?>
		<ul>
		    <li><h6>Follow us and Enter into $100 Monthly Prize Draw.</h6></li>
		    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		    <li><a href="#"><i id="popupNoticeTimes" class="fa fa-times"></i></a></li>
		</ul>

<?php else: ?>
		<ul>
		    <li class="text-align:center;"><h6>We Stand Behind all Our Products that's why we provide a Lifetime Warranty on all your Purchases</h6></li>
		    <li><a href="#"><i id="popupNoticeTimes" class="fa fa-times"></i></a></li>
		</ul>
<?php 
	endif;
	return ob_get_clean();
}
add_shortcode( 'mtt_popup_offer', 'mtt_popup_offer_shortcode' );


/**
 * @return MTT Hero Area HTML content to display the shortcode.
 */
function mtt_hero_slider_shortcode($args = array(), $content = "") {
	ob_start();
?>
	<section class="section mtt-hero-area-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="mtt-hero-area">
						<div class="mtt-hero-slider">
							<?php echo do_shortcode($content); ?>
						</div>
					</div><!-- .mtt-hero-area -->
				</div>
			</div>
		</div>
	</section><!-- .mtt-hero-area-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_hero_slider', 'mtt_hero_slider_shortcode' );


/**
 * @return MTT Front page Best Sellers HTML content to display the shortcode.
 */
function mtt_best_seller_shortcode() {
	ob_start();
?>
	<section class="section mtt-bestseller-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-bestseller-title text-center">
						<h3 class="font-weight-bold">BEST SELLERS</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="false"]');
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-bestseller-section-btn">
						<a class="btn rounded-0 mtt-btn px-4" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">VIEW ALL PRODUCTS</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-bestseller-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_best_sellers', 'mtt_best_seller_shortcode' );



/**
 * @return MTT Front page mtt_indoor_outdoor HTML content to display the shortcode.
 */
function mtt_indoor_outdoor_shortcode() {
	ob_start();
?>
	<section class="section mtt-in-outdoor-section">
		<div class="container">
			<hr class="mtt-in-outdoor-section-hr">
			<div class="row">
				<div class="col-md-3">
					<div class="mtt-product mtt-indoor-product">
						<div class="mtt-indoor-product-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
						</div>
						<div class="mtt-indoor-product-info text-center">
							<h4 class="font-weight-bold">INDOOR</h4>
							<h6 class="font-weight-bold">TITANIUM PRODUCTS</h6>
							<a class="btn rounded-0 mtt-btn" href="<?php echo home_url();?>/product-category/indoor-titanium-products/">SHOP NOW</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mtt-product mtt-in-outdoor-product">
						<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="mtt-product mtt-in-outdoor-product">
						<img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="mtt-outdoor-product">
						<div class="mtt-product mtt-outdoor-product-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
						</div>
						<div class="mtt-outdoor-product-info text-center">
							<h4 class="font-weight-bold">OUTDOOR</h4>
							<h6 class="font-weight-bold">TITANIUM PRODUCTS</h6>
							<a class="btn rounded-0 mtt-btn" href="<?php echo home_url();?>/product-category/outdoor-titanium-products/">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-in-outdoor-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_indoor_outdoor', 'mtt_indoor_outdoor_shortcode' );




/**
 * @return MTT Front page mtt_products_categories HTML content to display the shortcode.
 */
function mtt_products_categories_shortcode() {
	ob_start();
?>
	<section class="section mtt-fitness-p-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-fitness-p-title text-center">
						<h4 class="font-weight-bold">ALL FITNESS PRODUCTS ARE...</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-categories text-center">
						<div class="row">
							<div class="col">
								<div class="mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt=""></a>
									<h6>HEALTHY</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" alt=""></a><h6>STRONG</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt=""></a><h6>LIGHWEIGHT</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon4.png" alt=""></a><h6>ECO-FRIENDLY</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon5.png" alt=""></a><h6>CORROSION RESISTANT</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon6.png" alt=""></a><h6>BACTERIA INHIBITATION</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon7.png" alt=""></a><h6>HIGH TEMPERATURE RESISTANT</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon8.png" alt=""></a><h6>LOW TEMPERATURE RESISTANT</h6>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon9.png" alt=""></a><h6>GOOD HEATING</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-fitness-p-section-btn">
						<a class="btn rounded-0 mtt-btn px-5" href="<?php echo home_url();?>/why-titanium/">WHY YOU SHOULD BUY TITENIUM PRODUCTS?</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-fitness-p-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_products_categories', 'mtt_products_categories_shortcode' );




/**
 * @return MTT Front page mtt_finess_story HTML content to display the shortcode.
 */
function mtt_finess_story_shortcode() {
	ob_start();
?>
	<section class="section mtt-finess-story-section">
		<div class="container">
			<div class="row mtt-finess-story-row">
				<div class="col-md-6 col-sm-12">
					<div class="mtt-finess-story-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="mtt-finess-story text-center">
						<h6 class="mtt-finess-story-title">FINESCITY STORY</h6>
						<h5 class="font-weight-bold mb-3">FINEST IN TITENIUM PRODUCTS</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...</p>
						<br>
						<a class="btn rounded-0 mtt-btn text-uppercase" href="<?php echo home_url();?>/why-titanium/">read more</a>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><hr>
	</section><!-- .mtt-finess-story-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_finess_story', 'mtt_finess_story_shortcode' );




/**
 * @return MTT Front page mtt_instragram HTML content to display the shortcode.
 */
function mtt_instragram_shortcode() {
	ob_start();
?>
	<section class="section mtt-instagram-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-instagram-title text-center">
						<h6 class="mtt-instagram-title-sub pb-3 font-weight-bold">COMMUNITY</h6>
						<h3 class="font-weight-bold">SHOP OUR INSTAGRAM <span class="mtt-instagram-title-span">@FITNESSCITY</span></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-instagram">
						<div class="row">
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/14.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></a>
							</div>
							<div class="col-md-3 p-0">
								<a href="https://instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/15.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-instagram-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_instragram', 'mtt_instragram_shortcode' );













