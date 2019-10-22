<?php

/* Template Name: Single Product Template
**
**@Since Version 1.0.0
**
**/
	get_header();
?>

		<main>
			
			<section class="section mtt-single-product-section">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-2">
							<div class="mtt-product-categories p-3">
								<ul>
									<li><a href="#" class="btn btn-block rounded-0">Chopistics</a></li>
									<li><a href="#" class="btn btn-block rounded-0 active">Color Chopistics</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Cutlery Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Spork</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Long Hanle Spork</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Long Hanle Spoon</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Camping Mug</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Camping Mug With Lid</a></li>
									<li><a href="#" class="btn btn-block rounded-0">3-Pices Cook Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">2-Pices Cook Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Non-Stick Titenium Pot</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Non-Stick Titenium Pan</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Straw</a></li>
								</ul>
							</div>
						</div><!--  .col-md-3 -->
<div class="col-md-10">
	<div class="mtt-product-details">
		<div class="row">
			<div class="col-md-7">
				<div class="mtt-product-gallery">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/11.jpg">
								<div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/12.jpg">
								 <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/13.jpg">
							   <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
					<!-- flexslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(document).ready(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flexslider -->
					<div class="mtt-product-gallery-cat">
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
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon2.png" alt=""></a><h6>STRONG</h6>
									</div>
								</div>
								<div class="col">
									<div class="mtt-fitness-product mtt-category">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt=""></a><h6>LIGHWEIGHT</h6>
									</div>
								</div>
								<div class="col">
									<div class="mtt-fitness-product mtt-category">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon4.png" alt=""></a><h6>ECO-FRIENDLY</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="mtt-product-short-description">
					<h3>Titenium Chopistics With Aluminium Case</h3>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<span>928 Reviews .98 Answered Questions</span>
					</div>
					<div class="mtt-product-price">
						<p><span>$460</span>$450</p>
					</div>
					<div class="mtt-short-description">
						<h5>1 Pair of Titenium Chopistics comes with 9 different Aluminium Cases</h5>
					</div>
					<hr>
					<div class="mtt-color-quality-cart">
						<div class="row">
							<div class="col-3">
								<div class="mtt-product-color">
									<h5>Color : </h5>
									<div class="input-group mb-3">
									  <select class="custom-select" id="productColorSelect">
									    <option selected>Choose...</option>
									    <option value="1">Red</option>
									    <option value="2">Blue</option>
									    <option value="3">Black</option>
									    <option value="3">White</option>
									  </select>
									</div>
									<ul class="d-none">
										<li><a href="#" class="brown"><span></span></a></li>
										<li><a href="#" class="purple"><span></span></a></li>
										<li><a href="#" class="gray"><span></span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-5">
								<div class="mtt-product-quantity">
									<h5>Quality :</h5>
									 <div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus1">&nbsp;</div>
											<div class="entry value1"><span>1</span></div>
											<div class="entry value-plus1 active">&nbsp;</div>
										</div>
									</div>
									<!--quantity-->
											<script>
											$('.value-plus1').on('click', function(){
												var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
												divUpd.text(newVal);
											});

											$('.value-minus1').on('click', function(){
												var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
												if(newVal>=1) divUpd.text(newVal);
											});
											</script>
									<!--quantity-->
								</div>
							</div>
							<div class="col-4 p-0">
								<div class="mtt-addto-cart-btn mt-4">
									<form action="#" method="post">
										<input type="hidden" name="quantity" value="1"> 
										<input type="hidden" name="amount" value="450.00">   
										<button type="submit" class="btn mtt-btn radious-none">ADD TO CART</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="mtt-product-checkout">
						<h6 class="font-weight-bold">SECURE AND TRUSTED CHECKOUT WIT:</h6>
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
						</ul>
					</div>
					<div class="mtt-single-product-accordion">
						<div class="accordion" id="productAccordion">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          FEATURES
						        </button>
						      </h2>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#productAccordion">
						      <div class="card-body">
						        <h6>PRODUCT DIMENTIONS:</h6>
						        Chopistics Size: 9"/23cm <br>
						        Aluminium Case Size: 10"/25.4cm
						        <br><br>
						        <h6>PRODUCT SIZE:</h6>
								Width: 1.2"/3cm <br>
								Length: 10"/25.4cm
								<br><br>
						        <h6>PRODUCT WEIGHT:</h6>
						        45gm/1.6 ounce Includes Aluminium Case Weigth
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          SPECIFICATIONS
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#productAccordion">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="mtt-single-product-share">
						<span class="font-weight-bold">SHARE</span>
						<i class="fa fa-facebook px-2"> Facebook</i>
						<i class="fa fa-twitter px-2"> Twitter</i>
						<i class="fa fa-instagram px-2"> Instagram</i>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div><!--  .col-md-9 -->

					</div><!--  .row -->
					<!-- product full description -->
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-product-description">
									<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ADDITIONAL INFO</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>CUSTOMER REVIEWS</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>QUESTIONS & ANSWER</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3>This is title</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
							eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
							odit aut fugit, sed quia consequuntur magni dolores eos qui 
							ratione voluptatem sequi nesciunt.Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
							velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
							quo voluptas nulla pariatur.</p>
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>(2) Reviews</h4>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Laura</a>
									<h5>Oct 06, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Michael</a>
									<h5>Oct 04, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit" >
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', 
						fit: true 
					});
				});
			</script>
		</div>
	</div>
							</div>
						</div>
					</div>


				</div>
			</section>

			<section class="section mtt-bestseller-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-bestseller-title text-center">
								<h3 class="font-weight-bold">YOU MIGHT BE INTERESTED</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="">
								<h6>Titanium Chopistics With Color Case</h6>
								<p class="font-weight-bold">$16.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="">
								<h6>3 Piece Titenium Cutlery Set</h6>
								<p class="font-weight-bold">$27.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="">
								<h6>Titenium Camping CookWare Set 3-Piece</h6>
								<p class="font-weight-bold">$18.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
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
								<a class="btn rounded-0 mtt-btn px-4" href="#">DISCIVER MORE</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-bestseller-section -->
			<section class="section mtt-instagram-section mt-5 pt-4">
				<div class="container-fluid">
					<hr>
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

		<footer class="footer">
			<div class="mtt-footer-subscribtion">
				<div class="container">
					<div class="mtt-footer-signup">
						<div class="row">
							<div class="col">
								<div class="mtt-footer-signup-des">
									<div class="row">
										<div class="col-md-2 col"><img src="<?php echo get_template_directory_uri(); ?>/img/envelope.png" alt=""></div>
										<div class="col-md-10 col">
											<h5 class="font-weight-bold m-2">SUBSCRIBE TO KNOW OUR NEW <br> PRODUCTS LAUNCH $ SPECIAL OFFERS</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="mtt-footer-signup-form">
									<form action="#">
										<input type="email" placeholder="Your Email">
										<a class="btn rounded-0 mtt-btn text-uppercase px-5" href="#">sign up</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mtt-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="mtt-footer-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="">
								<h6 class="mtt-footer-title">GET IN TOUCH</h6>
								<span class="mtt-mail">SUPPORTS@FINESCITY.COM</span>
								<ul class="mtt-footer-social-icon">
									<li><i class="fa fa-facebook"></i></li>
									<li><i class="fa fa-twitter"></i></li>
									<li><i class="fa fa-youtube"></i></li>
									<li><i class="fa fa-instagram"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mtt-footer-right">
								<div class="row">
									<div class="col-md-4">
										<div class="mtt-footer-finescity">
											<h6 class="mtt-footer-title">FINESCITY</h6>
											<ul>
												<li><a href="#">SHOP</a></li>
												<li><a href="#">WHOLESALEs</a></li>
												<li><a href="#">CUSTOMERS</a></li>
												<li><a href="#">OUR STORY</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mtt-footer-c-service">
											<h6 class="mtt-footer-title">CUSTOMER SERVICESS</h6>
											<ul>
												<li><a href="#">SHOP</a></li>
												<li><a href="#">WHOLESALEs</a></li>
												<li><a href="#">CUSTOMERS</a></li>
												<li><a href="#">OUR STORY</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mtt-footer-ac">
											<h6 class="mtt-footer-title">MY ACCOUNT</h6>
											<ul>
												<li><a href="#">SHOP</a></li>
												<li><a href="#">WHOLESALEs</a></li>
												<li><a href="#">CUSTOMERS</a></li>
												<li><a href="#">OUR STORY</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-footer-bottom">
								<div class="row">
									<div class="col-md-6">
										<div class="mtt-copywrite">
											<span>&copy; FINESCITY 2019, ALL RIGHTS RESERVED</span>
										</div>
									</div>
									<div class="col-md-6">
										<ul class="nav">
											<li class="nav-item"><a class="nav-link" href="#">TERMS & CONDITIONS</a></li>
											<li class="nav-item"><a class="nav-link" href="#">PRIVACY POLICY</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Finess City</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<!-- bootstrap 4 CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- fontawesome CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- main css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="style.css">






		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!-- <script src="js/jquery.min.js"></script> -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	</head>
	<body>
		<header class="header mtt-header">
			<div class="mtt-nav-popup">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-nav-popup-content text-center">
								<ul>
									<li><h6>Follow us and Enter into $100 Monthly Prize Draw.</h6></li>
									<li><i class="fa fa-facebook"></i></li>
									<li><i class="fa fa-twitter"></i></li>
									<li><i class="fa fa-youtube"></i></li>
									<li><i class="fa fa-times"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mtt-nav-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<div class="mtt-nav-left">
								<nav class="mtt-nav">
									<ul class="nav">
										<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Products</a>
										<ul class="mtt-megamenu">
												<div class="mtt-megamenu-content">
													<div class="row">
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
																<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" alt=""></a>
																<a href="#"><h6 class="mtt-megamenu-item-title text-center">This is title</h6></a>
															</li>
														</div>
														<div class="col">
															<li class="mtt-megamenu-item">
															</li>
														</div>
													</div>
												</div>
												<div class="mtt-megamenu-bottom">
													<div class="row">
														<div class="col">
															<p class="text-center m-0">Free Delevery On Orders $50+</p>
														</div>
													</div>
												</div>
											</ul>
										</li>
										<li class="nav-item"><a class="nav-link" href="#">Accesories</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Wholesale</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Customerce</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-2">
							<div class="mtt-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
							</div>
						</div>
						<div class="col-md-5">
							<div class="mtt-nav-right">
								<nav class="mtt-nav">
									<ul class="nav">
										<li class="nav-item"><a class="nav-link active" href="#">Our Story</a></li>
										<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-heart-o"></i> 2-Wishlist</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Login</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Cart .0,00$ <i class="fa fa-shopping-bag"></i></a></li>
										<li class="nav-item"><a class="nav-link" href="#">USD</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main>
			
			<section class="section mtt-single-product-section">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-2">
							<div class="mtt-product-categories p-3">
								<ul>
									<li><a href="#" class="btn btn-block rounded-0">Chopistics</a></li>
									<li><a href="#" class="btn btn-block rounded-0 active">Color Chopistics</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Cutlery Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Spork</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Long Hanle Spork</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Long Hanle Spoon</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Camping Mug</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Camping Mug With Lid</a></li>
									<li><a href="#" class="btn btn-block rounded-0">3-Pices Cook Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">2-Pices Cook Set</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Non-Stick Titenium Pot</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Non-Stick Titenium Pan</a></li>
									<li><a href="#" class="btn btn-block rounded-0">Straw</a></li>
								</ul>
							</div>
						</div><!--  .col-md-3 -->
<div class="col-md-10">
	<div class="mtt-product-details">
		<div class="row">
			<div class="col-md-7">
				<div class="mtt-product-gallery">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/11.jpg">
								<div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/12.jpg">
								 <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/13.jpg">
							   <div class="thumb-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/13.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
					<!-- flexslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(document).ready(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flexslider -->
					<div class="mtt-product-gallery-cat">
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
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon2.png" alt=""></a><h6>STRONG</h6>
									</div>
								</div>
								<div class="col">
									<div class="mtt-fitness-product mtt-category">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt=""></a><h6>LIGHWEIGHT</h6>
									</div>
								</div>
								<div class="col">
									<div class="mtt-fitness-product mtt-category">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/accessories-icon4.png" alt=""></a><h6>ECO-FRIENDLY</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="mtt-product-short-description">
					<h3>Titenium Chopistics With Aluminium Case</h3>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<span>928 Reviews .98 Answered Questions</span>
					</div>
					<div class="mtt-product-price">
						<p><span>$460</span>$450</p>
					</div>
					<div class="mtt-short-description">
						<h5>1 Pair of Titenium Chopistics comes with 9 different Aluminium Cases</h5>
					</div>
					<hr>
					<div class="mtt-color-quality-cart">
						<div class="row">
							<div class="col-3">
								<div class="mtt-product-color">
									<h5>Color : </h5>
									<div class="input-group mb-3">
									  <select class="custom-select" id="productColorSelect">
									    <option selected>Choose...</option>
									    <option value="1">Red</option>
									    <option value="2">Blue</option>
									    <option value="3">Black</option>
									    <option value="3">White</option>
									  </select>
									</div>
									<ul class="d-none">
										<li><a href="#" class="brown"><span></span></a></li>
										<li><a href="#" class="purple"><span></span></a></li>
										<li><a href="#" class="gray"><span></span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-5">
								<div class="mtt-product-quantity">
									<h5>Quality :</h5>
									 <div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus1">&nbsp;</div>
											<div class="entry value1"><span>1</span></div>
											<div class="entry value-plus1 active">&nbsp;</div>
										</div>
									</div>
									<!--quantity-->
											<script>
											$('.value-plus1').on('click', function(){
												var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
												divUpd.text(newVal);
											});

											$('.value-minus1').on('click', function(){
												var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
												if(newVal>=1) divUpd.text(newVal);
											});
											</script>
									<!--quantity-->
								</div>
							</div>
							<div class="col-4 p-0">
								<div class="mtt-addto-cart-btn mt-4">
									<form action="#" method="post">
										<input type="hidden" name="quantity" value="1"> 
										<input type="hidden" name="amount" value="450.00">   
										<button type="submit" class="btn mtt-btn radious-none">ADD TO CART</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="mtt-product-checkout">
						<h6 class="font-weight-bold">SECURE AND TRUSTED CHECKOUT WIT:</h6>
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/tb1.jpg" alt=""></li>
						</ul>
					</div>
					<div class="mtt-single-product-accordion">
						<div class="accordion" id="productAccordion">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          FEATURES
						        </button>
						      </h2>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#productAccordion">
						      <div class="card-body">
						        <h6>PRODUCT DIMENTIONS:</h6>
						        Chopistics Size: 9"/23cm <br>
						        Aluminium Case Size: 10"/25.4cm
						        <br><br>
						        <h6>PRODUCT SIZE:</h6>
								Width: 1.2"/3cm <br>
								Length: 10"/25.4cm
								<br><br>
						        <h6>PRODUCT WEIGHT:</h6>
						        45gm/1.6 ounce Includes Aluminium Case Weigth
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          SPECIFICATIONS
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#productAccordion">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="mtt-single-product-share">
						<span class="font-weight-bold">SHARE</span>
						<i class="fa fa-facebook px-2"> Facebook</i>
						<i class="fa fa-twitter px-2"> Twitter</i>
						<i class="fa fa-instagram px-2"> Instagram</i>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div><!--  .col-md-9 -->

					</div><!--  .row -->
					<!-- product full description -->
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-product-description">
									<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ADDITIONAL INFO</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>CUSTOMER REVIEWS</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>QUESTIONS & ANSWER</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3>This is title</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
							eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
							odit aut fugit, sed quia consequuntur magni dolores eos qui 
							ratione voluptatem sequi nesciunt.Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
							velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
							quo voluptas nulla pariatur.</p>
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>(2) Reviews</h4>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Laura</a>
									<h5>Oct 06, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Michael</a>
									<h5>Oct 04, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit" >
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', 
						fit: true 
					});
				});
			</script>
		</div>
	</div>
							</div>
						</div>
					</div>


				</div>
			</section>

			<section class="section mtt-bestseller-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-bestseller-title text-center">
								<h3 class="font-weight-bold">YOU MIGHT BE INTERESTED</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="">
								<h6>Titanium Chopistics With Color Case</h6>
								<p class="font-weight-bold">$16.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="">
								<h6>3 Piece Titenium Cutlery Set</h6>
								<p class="font-weight-bold">$27.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
							<article class="mtt-product text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="">
								<h6>Titenium Camping CookWare Set 3-Piece</h6>
								<p class="font-weight-bold">$18.99</p>
								<a class="btn rounded-0 mtt-product-btn" href="#">More Details</a>
							</article>
						</div>
						<div class="col-md-3">
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
								<a class="btn rounded-0 mtt-btn px-4" href="#">DISCIVER MORE</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-bestseller-section -->
			<section class="section mtt-instagram-section mt-5 pt-4">
				<div class="container-fluid">
					<hr>
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