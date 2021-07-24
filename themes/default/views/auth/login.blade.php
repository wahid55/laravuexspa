<x-app-layout>
	<!-- Shop Login -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="login-form">
						<h2>Login</h2>
						<p>Please register in order to checkout more quickly</p>
						<!-- Form -->
						<form class="form" method="post" action="#">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label>Your Email<span>*</span></label>
										<input type="email" name="email" placeholder="" required="required">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Your Password<span>*</span></label>
										<input type="password" name="password" placeholder="" required="required">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">Login</button>
										<a href="register.html" class="btn">Register</a>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember me</label>
									</div>
									<a href="#" class="lost-pass">Lost your password?</a>
								</div>
							</div>
						</form>
						<!--/ End Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Login -->
</x-app-layout>
