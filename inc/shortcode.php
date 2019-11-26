<?php
/**
 * CitySHop Shortcodes
 *
 * @package CitySHop
 */

/**
 * @return MTT login form shortcode.
 */
function mtt_login_form_shortcode() {

	if (is_admin() || is_user_logged_in()):
?>
<section class="section mtt-login-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-section-title text-center">
						<h2 class="font-weight-bold"><?php esc_html_e("Login Successfull!", "city-shop");?></h2>
						<p>Go to <a href="<?php echo home_url()?>/my-account">Dashboard</a></p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-login-section -->

<?php
		return;
	endif;

	ob_start();
?>
	<section class="section mtt-login-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-section-title text-center">
						<h1 class="font-weight-bold"><?php esc_html_e("WELCOME BACK", "city-shop");?></h1>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-login-section -->

	<section class="section mtt-login-form-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="mtt-login">
						<h5 class="text-center py-2 mb-4"><?php esc_html_e("Sign into your existing finessCity account", "city-shop");?></h5>
						<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
						<form class="woocommerce-form woocommerce-form-login login mb-5" method="post">
							<?php do_action( 'woocommerce_login_form_start' ); ?>
							<div class="form-group">
								<label for="username" class="font-weight-bold"><?php esc_html_e( 'Email', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" placeholder="JOHN.SMIT@EXAMPLE.COM" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
								<?php // @codingStandardsIgnoreLine ?>
							</div>
							<div class="form-group">
								<label for="password" class="font-weight-bold"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" placeholder="PASSWORD" autocomplete="current-password" />
							</div>
							<div class="form-group text-right">
								<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="font-weight-bold"><?php esc_html_e( 'Forgot Password?', 'woocommerce' ); ?></a>
							</div>
							<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
							<button type="submit" class="woocommerce-button button woocommerce-form-login__submit btn mtt-btn rounded-0 btn-block" name="login" value="<?php esc_attr_e( 'SIGN IN', 'woocommerce' ); ?>"><?php esc_html_e( 'SIGN IN', 'woocommerce' ); ?></button>
							<div class="form-group text-center mt-3">
								<!--  -->
								<h5 class="text-center py-3">New to finessCity? <a href="<?php echo home_url();?>/register" class="font-weight-bold">Create an account</a></h5>
							</div>
							<?php do_action( 'woocommerce_login_form_end' ); ?>
						</form>
						<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-login-form-section -->
<?php

	return ob_get_clean();
}
add_shortcode( 'mtt_login_form', 'mtt_login_form_shortcode' );

/**
 * @return MTT Register form shortcode.
 */
function mtt_register_form_shortcode() {
	ob_start();
?>
	<section class="section mtt-login-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-section-title text-center">
						<h1 class="font-weight-bold"><?php esc_html_e("WELCOME BACK", "city-shop");?></h1>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-login-section -->

	<section class="section mtt-login-form-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="mtt-login">
						<p class="text-center py-2"><?php esc_html_e("Register your finessCity account", "city-shop");?></p>
						<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
							<div class="form-group">
								<label for="reg_username" class="font-weight-bold"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="reg_username" placeholder="USER NAME" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
								<?php // @codingStandardsIgnoreLine ?>
							</div>
							<div class="form-group">
								<label for="reg_email" class="font-weight-bold"><?php esc_html_e( 'Email', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="reg_email" placeholder="JOHN.SMIT@EXAMPLE.COM" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
								<?php // @codingStandardsIgnoreLine ?>
							</div>
							<div class="form-group">
								<label for="reg_password" class="font-weight-bold"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="reg_password" autocomplete="new-password" />
							</div>
							<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
							<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit btn mtt-btn rounded-0 btn-block" name="register" value="<?php esc_attr_e( 'REGISTER', 'woocommerce' ); ?>"><?php esc_html_e( 'REGISTER', 'woocommerce' ); ?></button>
							<p class="text-center py-3 m-0">Already have finessCity Account? <a href="<?php echo home_url();?>/login" class="font-weight-bold">Login</a></p>
							<?php // This action will echo Register Tearm and condition // do_action( 'woocommerce_register_form' ); ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-login-form-section -->
<?php

	return ob_get_clean();
}
add_shortcode( 'mtt_register_form', 'mtt_register_form_shortcode' );


/**
 * @return MTT Popup Offers HTML content to display the shortcode.
 */
function mtt_popup_offer_shortcode() {
	ob_start();

	if(is_front_page()):
?>
		<ul>
		    <li><h6>Follow us and Enter into $100 Monthly Prize Draw.</h6></li>
		    <li><a href="https://facebook.com/finessCity" target="_blank"><i class="fa fa-facebook"></i></a></li>
		    <li><a href="https://twitter.com/finessCity" target="_blank"><i class="fa fa-twitter"></i></a></li>
		    <li><a href="https://instagram.com/finesscity" target="_blank"><i class="fa fa-instagram"></i></a></li>
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
						<h4>BEST SELLERS</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				//echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="false"]');

				echo do_shortcode('[products limit="4" columns="4" skus="bestSeller1, bestSeller2, bestSeller3, bestSeller4" orderby="date" order="desc"]');
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-bestseller-section-btn">
						<a class="btn rounded-0 mtt-btn px-5" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">VIEW ALL PRODUCTS</a>
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
 * @return MTT related products HTML content to display the shortcode.
 */
function mtt_related_products_shortcode() {
	ob_start();
?>
	<section class="section mtt-bestseller-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-bestseller-title text-center">
						<h4>YOU MIGHT BE INTERESTED</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					echo do_shortcode('[related_products limit="4"]');
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-bestseller-section-btn">
						<a class="btn rounded-0 mtt-btn px-5" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">DISCOVER MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .mtt-bestseller-section -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_related_products', 'mtt_related_products_shortcode' );



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
				<div class="col-md-3 mtt-indoor-product-col1 pr-0 mb-4 mb-md-0">
					<div class="mtt-product mtt-indoor-product">
						<div class="mtt-indoor-product-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
						</div>
						<div class="mtt-indoor-product-info text-center">
							<h4>INDOOR</h4>
							<h6 class="font-weight-bold">TITANIUM PRODUCTS</h6>
							<a class="btn rounded-0 mtt-btn mx-4 mx-md-0 px-4 py-2" href="<?php echo home_url();?>/indoor">SHOP NOW</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mtt-indoor-product-col2 mb-4 mb-md-0">
					<div class="mtt-product mtt-in-outdoor-product h-100">
						<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
					</div>
				</div>

				<div class="col-md-3 mtt-outdoor-product-col1">
					<div class="mtt-product mtt-in-outdoor-product h-100">
						<img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 mtt-outdoor-product-col2 pl-0">
					<div class="mtt-outdoor-product">
						<div class="mtt-product mtt-outdoor-product-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
						</div>
						<div class="mtt-outdoor-product-info text-center">
							<h4>OUTDOOR</h4>
							<h6 class="font-weight-bold">TITANIUM PRODUCTS</h6>
							<a class="btn rounded-0 mtt-btn mx-4 mx-md-0 px-4 py-2" href="<?php echo home_url();?>/outdoor">SHOP NOW</a>
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
						<h4>ALL FITNESS PRODUCTS ARE...</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-categories text-center">
						<div class="row" id="mtt-categories">
							<div class="col">
								<div class="mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt=""><p class="small text-dark mt-2 mb-0">HEALTHY</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" alt=""><p class="small text-dark mt-2 mb-0">STRONG</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt=""><p class="small text-dark mt-2 mb-0">LIGHWEIGHT</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon4.png" alt=""><p class="small text-dark mt-2 mb-0">ECO-FRIENDLY</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon5.png" alt=""><p class="small text-dark mt-2 mb-0">CORROSION RESISTANT</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon6.png" alt=""><p class="small text-dark mt-2 mb-0">BACTERIA INHIBITATION</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon7.png" alt=""><p class="small text-dark mt-2 mb-0">HIGH TEMPERATURE RESISTANT</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon8.png" alt=""><p class="small text-dark mt-2 mb-0">LOW TEMPERATURE RESISTANT</p>
								</div>
							</div>
							<div class="col">
								<div class="mtt-fitness-product mtt-category">
									<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icon9.png" alt=""><p class="small text-dark mt-2 mb-0">GOOD HEATING</p>
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
function mtt_finess_story_shortcode($atts = array()) {
	
	$atts = shortcode_atts( array(
		'img' => '',
		'title' => 'FINEST IN TITANIUM PRODUCTS',
		'sub_title' => 'FINESSCITY STORY',
		'desc' => '....',
		'link' => '#',
		'link_text' => 'Read More'
	), $atts, 'mtt_finess_story' );

	ob_start();
?>
	<section class="section mtt-finess-story-section">
		<div class="container">
			<div class="row mtt-finess-story-row px-0 px-md-4">
				<div class="col-md-6 col-sm-12">
					<div class="mtt-finess-story-img">
						<img src="<?php echo $atts['img']; ?>" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="mtt-finess-story text-center mt-5 mt-md-0">
						<h6 class="mtt-finess-story-title"><?php echo $atts['sub_title']; ?></h6>
						<h4 class="mtt-finess-story-title2 mb-3"><?php echo $atts['title']; ?></h4>
						<p><?php echo $atts['desc']; ?></p>
						<br>
						<a class="btn rounded-0 mtt-btn text-uppercase px-5" href="<?php echo $atts['link'] ?>"><?php echo $atts['link_text']; ?></a>
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
function mtt_instragram_shortcode($args = array(), $instragram_url = "") {
	ob_start();
?>
	<section class="section mtt-instagram-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mtt-instagram-title text-center">
						<h6 class="mtt-instagram-title-sub pb-3 font-weight-bold">COMMUNITY</h6>
						<h4>SHOP OUR INSTAGRAM <span class="mtt-instagram-title-span">
							<a href="<?php echo esc_url($instragram_url); ?>" target="_blank">@FITNESSCITY</a></span></h4>
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



function mtt_section_shortcode( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
	), $atts, 'mtt_section' );

	// do shortcode actions here
	ob_start()?>
	<section class="section <?php echo $atts['class'] ?>" <?php if (!empty($atts['id'])): ?>
		id="<?php echo $atts['id']; ?>"
	<?php endif ?>>
		<div class="container"><?php echo do_shortcode($content); ?></div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_section', 'mtt_section_shortcode' );


function mtt_row_shortcode( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
	), $atts, 'mtt_row' );

	// do shortcode actions here
	ob_start(); ?>
	<div class="row <?php echo $atts['class'] ?>" <?php if (!empty($atts['id'])): ?>
		id="<?php echo $atts['id']; ?>"
	<?php endif ?>><?php echo  do_shortcode($content); ?></div>
	<?php 
	return ob_get_clean();
}
add_shortcode( 'mtt_row', 'mtt_row_shortcode' );


function mtt_div_shortcode( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
	), $atts, 'mtt_div' );

	// do shortcode actions here
	ob_start();
	?>
	<div class="<?php echo $atts['class'] ?>" <?php if (!empty($atts['id'])): ?>
		id="<?php echo $atts['id']; ?>"
	<?php endif ?>><?php echo do_shortcode($content); ?></div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_div', 'mtt_div_shortcode' );

function mtt_htag_shortcode( $atts = array() ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
		'tag' => 'h3',
		'text' => 'Sample Heading',
	), $atts, 'mtt_htag' );

	$idclass = !empty($atts['id']) ? ' id="'.$atts['id'].'"' : '';
	$idclass .= !empty($atts['class']) ? ' class="'.$atts['class'].'"' : '';

	// do shortcode actions here
	ob_start();
	?>
	<<?php echo $atts['tag'] ?> <?php echo $idclass; ?>><?php echo $atts['text']; ?></<?php echo $atts['tag'] ?>>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_htag', 'mtt_htag_shortcode' );

function mtt_link_shortcode( $atts = array() ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'class' => '',
		'link' => '#',
		'text' => 'Sample Link',
	), $atts, 'mtt_link' );

	$idclass = !empty($atts['id']) ? ' id="'.$atts['id'].'"' : '';
	$idclass .= !empty($atts['class']) ? ' class="'.$atts['class'].'"' : '';

	// do shortcode actions here
	ob_start();
	?>
	<a href="<?php echo $atts['link']; ?>" <?php echo $idclass; ?>><?php echo $atts['text'] ?></a>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_link', 'mtt_link_shortcode' );

function mtt_page_title_shortcode( $atts = array() ) {
	$atts = shortcode_atts( array(
		'title' => 'value',
		'class' => '',
	), $atts, 'mtt_page_title' );

	// do shortcode actions here
	ob_start(); ?>
	<div class="mtt-section-title text-center pb-1">
		<h1 class="font-weight-bold text-uppercase"><?php echo $atts['title']; ?></h1>
	</div>
	<hr>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_page_title', 'mtt_page_title_shortcode' );


function mtt_icon_right_text_shortcode( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'id' => '',
		'items' => '',
	), $atts, 'mtt_icon_right_text' );

	$items = explode(',', $atts['items']);

	// do shortcode actions here
	ob_start(); ?>
	<div class="mtt-categories text-center">
		<div class="row">
			<?php for ($i = 0; $i < sizeof($items); $i+=2): ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="mtt-category">
						<div class="row">
							<div class="col p-0">
								<img src="<?php echo wp_get_attachment_url($items[$i]); ?>" alt="<?php echo get_post($items[$i])->post_title; ?>">
							</div>
							<div class="col p-0">
								<?php 
									$text = str_replace('/','<br>',$items[$i+1]);
								 ?>
								<h6 class="text-left mt-4 text-uppercase"><?php echo $text; ?></h6>
							</div>
						</div>
					</div>
				</div>
			<?php endfor ?>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'mtt_icon_right_text', 'mtt_icon_right_text_shortcode' );