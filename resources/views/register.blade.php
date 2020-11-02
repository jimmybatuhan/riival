@extends('layout.mainlayout')
@section('content')		
	<!-- Page Content -->
    <div class="bg-pattern-style bg-pattern-style-register">
				<div class="content">
								
					<!-- Register Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3><span>Mentoring</span> Register</h3>
									<p class="text-muted">Access to our dashboard</p>
								</div>
								
								<!-- Register Form -->
								<form action="index">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">First Name</label>
												<input id="first-name" type="text" class="form-control" name="first_name" autofocus="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Last Name</label>
												<input id="last-name" type="text" class="form-control" name="last_name">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input id="email" type="email" class="form-control">
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Password</label>
												<input id="password" type="password" class="form-control" name="password">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Confirm Password</label>
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="custom-control custom-control-xs custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="agreeCheckboxUser" id="agree_checkbox_user">
											<label class="custom-control-label" for="agree_checkbox_user">I agree to Mentoring</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
										</div>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Create Account</button>
									<div class="account-footer text-center mt-3">
										Already have an account? <a class="forgot-link mb-0" href="login">Login</a>
									</div>
								</form>
								<!-- /Register Form -->
								
							</div>
						</div>
					</div>
					<!-- /Register Content -->

				</div>

			</div>		
			<!-- /Page Content -->
@endsection