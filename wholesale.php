<?php

/* Template Name: Wholesale Template
**
**@Since Version 1.0.0
**
**/
	get_header();
?>
		<main>

			<section class="section mtt-wholesale-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-section-title text-center">
								<h1 class="mtt-Brandon-grotesque-black">WHOLESALE & CUSTOM ORDERS</h1>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-section-description text-center">
								<p class="text-center py-2">Feel free to send us your wholsale request to:</p>
								<p class="text-center py-0 m-0 mtt-Brandon-grotesque-black">Email: wholesale@finesscity.com Or,</p>
								<p class="text-center py-0 m-0 mtt-Brandon-grotesque-black">Call us +44 7947569862</p>
								<p class="text-center py-0 m-0">We are looking forward to working with you :0)</p>
							</div>
						</div>
					</div>
					
				</div>
			</section><!-- .mtt-wholesale-section -->

			<section class="section mtt-wholesale-form-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="mtt-wholesale">
								<div class="mtt-wholesale-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="">
								</div>
								<div class="mtt-wholesale-title">
									<h2 class="mtt-Brandon-grotesque-black my-4">Wholesale inquiries</h2>
								</div>

								<form action="#">
									<div class="form-row">
									    <div class="form-group col-md-6">
									    	<label for="FirstName" class="mtt-Brandon-grotesque-black">First Name</label>
									    	<input type="text" class="form-control" id="FirstName" placeholder="ENTER YOUR NAME">
									    </div>
									    <div class="form-group col-md-6">
									    	<label for="LastName" class="mtt-Brandon-grotesque-black">Last Name</label>
									    	<input type="text" class="form-control" id="LastName" placeholder="ENTER YOUR NAME">
										</div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-6">
									    	<label for="Email" class="mtt-Brandon-grotesque-black">Email</label>
									    	<input type="email" class="form-control" id="Email" placeholder="JOHN.SMIT@EXAMPLE.COM">
									    </div>
									    <div class="form-group col-md-6">
									    	<label for="PhoneNumber" class="mtt-Brandon-grotesque-black">Phone Number</label>
									    	<div class="row">
									    		<div class="col-5">
									    			<input type="text" class="form-control" id="PhoneNumber" placeholder="AREA CODE">
									    		</div>
									    		<span>_</span>
									    		<div class="col">
									    			<input type="text" class="form-control" id="PhoneNumber" placeholder="PHONE NUMBER">
									    		</div>
									    	</div>
										</div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-12">
									    	<label for="Interest" class="mtt-Brandon-grotesque-black">I'm Interested in...</label>
											<select class="form-control" id="Interest">
												<option>TITENIUM PRODUCTS WITH CHOPISTICS</option>
												<option>TITENIUM PRODUCTS WITH CHOPISTICS</option>
												<option>TITENIUM PRODUCTS WITH CHOPISTICS</option>
												<option>TITENIUM PRODUCTS WITH CHOPISTICS</option>
											</select>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-12">
									    	<label for="Interest" class="mtt-Brandon-grotesque-black">HOw Many Units Are You Interested in?</label>
									    	<div class="row">
									    		<div class="col-2 m-0 pr-0">
													<a href="#" class="btn bg-white px-4 py-2">25-99</a>
									    		</div>
									    		<div class="col-2 m-0 pr-0">
													<a href="#" class="btn bg-white px-4 py-2">100-199</a>
									    		</div>
									    		<div class="col-2 m-0 pr-0">
													<a href="#" class="btn mtt-btn px-4 py-2">200-499</a>
									    		</div>
									    		<div class="col-2 m-0 pr-0">
													<a href="#" class="btn bg-white px-5 py-2">+500</a>
									    		</div>
									    		
									    	</div>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-4 col-sm-6 col-xs-12">
									    	<label for="Dadeline" class="mtt-Brandon-grotesque-black">Dadeline To Recieve Product</label>
									    	<input type="date" class="form-control" id="Dadeline" placeholder="MM-DD-YY">
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-12">
									    	<label for="AdditionalDetails" class="mtt-Brandon-grotesque-black">Additional Details We Should Know</label>
									    	<textarea class="form-control" id="AdditionalDetails" rows="4"></textarea>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-4 col-sm-6 col-xs-12">
									    	<label for="Interest" class="mtt-Brandon-grotesque-black">How Did You Here About Us?</label>
											<select class="form-control" id="Interest">
												<option>AMAZON</option>
												<option>AMAZON</option>
												<option>AMAZON</option>
												<option>AMAZON</option>
											</select>
									    </div>
									</div>
									<button type="submit" class="btn mtt-btn px-5 my-4 rounded-0">SUBMIT</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-wholesale-form-section -->
		</main>

<?php get_footer(); ?>