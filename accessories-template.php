<?php

/* Template Name: Accessories Template
**
**@Since Version 1.0.0
**
**/
	get_header();
?>
		<main>

			<section class="section mtt-accessories-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-section-title text-center">
								<h1 class="font-weight-bold">ACCESSORIES</h1>
							</div>
						</div>
					</div>
						<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-categories text-center">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="mtt-category">
											<div class="row">
												<div class="col p-0">
													<img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon1.png" alt="">
												</div>
												<div class="col p-0">
													<h6 class="text-left mt-4">100% <br>HEALTHY</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="mtt-category">
											<div class="row">
												<div class="col p-0">
													<img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon2.png" alt="">
												</div>
												<div class="col p-0">
													<h6 class="text-left mt-4">EXTRA <br>STRONG</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="mtt-category">
											<div class="row">
												<div class="col p-0">
													<img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon3.png" alt="">
												</div>
												<div class="col p-0">
													<h6 class="text-left mt-4">ULTRA <br>LIGHWEIGHT</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="mtt-category">
											<div class="row">
												<div class="col p-0">
													<img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon4.png" alt="">
												</div>
												<div class="col p-0">
													<h6 class="text-left mt-4">ECO <br>FRIENDLY</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-accessories-section -->

			<section class="section mtt-accessories-p-section">
				<div class="container">
					<div class="row">
						<?php
						echo do_shortcode('[products columns="4"]');
						?>
					</div>
				</div>
			</section>

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