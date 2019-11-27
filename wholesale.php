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
								<p class="text-center py-0 m-0 mtt-Brandon-grotesque-black">Email: wholesale@finesscity.com or,</p>
								<p class="text-center py-0 m-0 mtt-Brandon-grotesque-black">Call us +44 7947569862</p>
								<p class="text-center py-0 m-0">We are looking forward to working with you :0)</p>
							</div>
						</div>
					</div>
					
				</div>
			</section><!-- .mtt-wholesale-section -->
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<?php if (isset($_SESSION['wholsale_save_response'])):
							$session = $_SESSION['wholsale_save_response']; ?>
							<?php if ($session['success']): ?>
								<div class="alert alert-success" role="alert">
									<?php echo $session['data']['message']; ?>
								</div>
							<?php else: ?>
								<div class="alert alert-danger" role="alert">
									<?php foreach ($session['data']['message'] as $key => $message): ?>
										<?php echo $message; ?>
									<?php endforeach ?>
								</div>
							<?php endif ?>
							<?php unset($_SESSION['wholsale_save_response']); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
			<section class="section mtt-wholesale-form-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="mtt-wholesale">
								<div class="mtt-wholesale-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo-black-blue.png" alt="">
								</div>
								<div class="mtt-wholesale-title">
									<h3 class="mtt-Brandon-grotesque-black my-4 black">Wholesale inquiries</h3>
								</div>

								<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
									<div class="form-row">
									    <div class="form-group col-md-6">
									    	<label for="FirstName" class="mtt-Brandon-grotesque-black">First Name</label>
									    	<input type="text" class="form-control" name="fname" id="FirstName" placeholder="ENTER YOUR NAME" required>
									    </div>
									    <div class="form-group col-md-6">
									    	<label for="LastName" class="mtt-Brandon-grotesque-black">Last Name</label>
									    	<input type="text" class="form-control" name="lname" id="LastName" placeholder="ENTER YOUR NAME" required>
										</div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-6">
									    	<label for="Email" class="mtt-Brandon-grotesque-black">Email</label>
									    	<input type="email" class="form-control" name="email" id="Email" placeholder="JOHN.SMIT@EXAMPLE.COM" required>
									    </div>
									    <div class="form-group col-md-6">
									    	<label for="PhoneNumber" class="mtt-Brandon-grotesque-black">Phone Number</label>
									    	<div class="row">
									    		<div class="col-4">
									    			<input type="text" class="form-control" name="phone[]" id="PhoneNumber" placeholder="AREA CODE" required>
									    		</div>
									    		<span>_</span>
									    		<div class="col">
									    			<input type="text" class="form-control" name="phone[]" id="PhoneNumber" placeholder="PHONE NUMBER" required>
									    		</div>
									    	</div>
										</div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-12">
									    	<label for="Interest" class="mtt-Brandon-grotesque-black">I'm Interested in...</label>
											<select class="form-control select2" name="interest" id="Interest" required>
												<?php foreach (city_shop_products() as $product): ?>
													<option value="<?php echo $product->ID; ?>"><?php echo $product->post_title; ?></option>
												<?php endforeach ?>
											</select>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-12">
									    	<label for="Interest" class="mtt-Brandon-grotesque-black">How Many Units Are You Interested in?</label>
									    	<div class="clearfix">
									    		<div class="m-0 pr-3 d-inline">
									    			<?php $id = uniqid('qty'); ?>
									    			<input type="radio" value="25-99" name="qty" id="<?php echo $id; ?>" class="d-none" required>
													<a href="javascript:;" onclick="selectQty(this, '<?php echo $id; ?>');" class="btn bg-white px-4 py-2">25-99</a>
									    		</div>
									    		<div class="m-0 pr-3 d-inline">
									    			<?php $id = uniqid('qty'); ?>
									    			<input type="radio" value="100-199" name="qty" id="<?php echo $id; ?>" class="d-none">
													<a href="javascript:;" onclick="selectQty(this, '<?php echo $id; ?>');" class="btn bg-white px-4 py-2">100-199</a>
									    		</div>
									    		<div class="m-0 pr-3 d-inline">
									    			<?php $id = uniqid('qty'); ?>
									    			<input type="radio" value="200-499" name="qty" id="<?php echo $id; ?>" class="d-none">
													<a href="javascript:;" onclick="selectQty(this, '<?php echo $id; ?>');" class="btn bg-white px-4 py-2">200-499</a>
									    		</div>
									    		<div class="m-0 pr-3 d-inline">
									    			<?php $id = uniqid('qty'); ?>
									    			<input type="radio" value="+500" name="qty" id="<?php echo $id; ?>" class="d-none">
													<a href="javascript:;" onclick="selectQty(this, '<?php echo $id; ?>');" class="btn bg-white px-5 py-2">+500</a>
									    		</div>
									    		<script>
									    			function selectQty(elem, id){
													    jQuery('a.btn.bg-white').removeClass('active');
													    jQuery(elem).addClass('active');
													    jQuery("#"+id).trigger('click');
													    console.log(id);
													}
									    		</script>
									    	</div>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-3 col-sm-6 col-xs-12">
									    	<label for="datepicker" class="mtt-Brandon-grotesque-black">Deadline To Recieve Product</label>
									    	<div class="input-group">
										    	<input type="text" name="dadeline" class="form-control border-right-0" id="datepicker" placeholder="MM-DD-YY">
										    	<div class="input-group-append border-left-0">
												    <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
												</div>
											</div>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-12">
									    	<label for="AdditionalDetails" class="mtt-Brandon-grotesque-black">Additional Details We Should Know</label>
									    	<textarea class="form-control" name="additional_details" id="AdditionalDetails" rows="4" required></textarea>
									    </div>
									</div>
									<div class="form-row">
									    <div class="form-group col-md-4 col-sm-6 col-xs-12">
									    	<label for="reference" class="mtt-Brandon-grotesque-black">How Did You Here About Us?</label>
											<select class="form-control" name="reference" id="reference">
												<option>AMAZON</option>
												<option>AMAZON</option>
												<option>AMAZON</option>
												<option>AMAZON</option>
											</select>
									    </div>
									</div>
									<?php $nonce = wp_create_nonce( 'save-contact' ); ?>
									<input type="hidden" name="save-contact" value="<?php echo esc_attr( $nonce ); ?>">
									<input type="hidden" name="action" value="contact_form">
									<button type="submit" class="btn mtt-btn px-5 my-4 rounded-0">SUBMIT</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-wholesale-form-section -->
		</main>

<?php get_footer(); ?>