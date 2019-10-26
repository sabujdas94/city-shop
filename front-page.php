<?php

/* Template Name: Front Page
**
**@Since Version 1.0.0
**
**/
	get_header();
?>

		<main>
			<section class="section mtt-hero-area-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 p-0">
							<div class="mtt-hero-area">
								<div class="mtt-hero-slider">
									<?php if('revslider'){
										add_revslider('slider-1');
									}; ?>
								</div>
							</div><!-- .mtt-hero-area -->
						</div>
					</div>
				</div>
			</section><!-- .mtt-hero-area-section -->
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
						<div class="col-md-3 col-sm-6">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="">
								<h6>Titanium Chopistics With Color Case</h6>
								<p class="font-weight-bold">$16.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3 col-sm-6">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="">
								<h6>3 Piece Titenium Cutlery Set</h6>
								<p class="font-weight-bold">$27.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3 col-sm-6">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="">
								<h6>Titenium Camping CookWare Set 3-Piece</h6>
								<p class="font-weight-bold">$18.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3 col-sm-6">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p4.jpg" alt="">
								<h6>Titenium Mug With Lid</h6>
								<p class="font-weight-bold">$99.00</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-bestseller-section-btn">
								<a class="btn rounded-0 mtt-btn px-4" href="#">VIEW ALL PRODUCTS</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-bestseller-section -->

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
									<a class="btn rounded-0 mtt-btn" href="#">SHOP NOW</a>
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
									<a class="btn rounded-0 mtt-btn" href="#">SHOP NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-bestseller-section -->
			
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
								<a class="btn rounded-0 mtt-btn px-5" href="#">WHY YOU SHOULD BUY TITENIUM PRODUCTS?</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-fitness-p-section -->

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
								<h6 class="text-primary">FINESCITY STORY</h6>
								<h5 class="font-weight-bold mb-3">FINEST IN TITENIUM PRODUCTS</h5>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...</p>
								<br>
								<a class="btn rounded-0 mtt-btn text-uppercase" href="#">read more</a>
							</div>
						</div>
					</div>
				</div>
				<br><br><br><hr>
			</section><!-- .mtt-finess-story-section -->
			<section class="section mtt-instagram-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-instagram-title text-center">
								<h4>COMMUNITY</h4>
								<h3 class="font-weight-bold">SHOP OUR INSTAGRAM <span class="text-primary">@FITNESSCITY</span></h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-instagram">
								<div class="row">
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/14.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt=""></div>
									<div class="col-md-3 p-0"><img src="<?php echo get_template_directory_uri(); ?>/img/15.jpg" alt=""></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-instagram-section -->
		</main>

<?php get_footer(); ?>