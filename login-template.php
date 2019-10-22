<?php

/* Template Name: Login Template
**
**@Since Version 1.0.0
**
**/
	get_header();
?>
		<main>

			<section class="section mtt-login-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mtt-section-title text-center">
								<h1 class="font-weight-bold">WELCOME BACK</h1>
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
								<p class="text-center py-2">Sign into your existing finessCity account</p>
								<form action="#">
									<div class="form-group">
								    	<label for="Email" class="font-weight-bold">Email</label>
								    	<input type="email" class="form-control" id="Email" placeholder="JOHN.SMIT@EXAMPLE.COM">
									</div>
									<div class="form-group">
								    	<label for="Password" class="font-weight-bold">Password</label>
								    	<input type="password" class="form-control" id="Password" placeholder="PASSWORD">
									</div>
									<div class="form-group text-right"><a href="#" class="font-weight-bold">Forgot Password?</a></div>
									<button type="submit" class="btn mtt-btn rounded-0 btn-block">SIGN IN</button>
								</form>
								<p class="text-center py-3">New to finessCity? <a href="#" class="font-weight-bold">Create an account</a></p>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .mtt-login-section -->
		</main>

<?php get_footer(); ?>