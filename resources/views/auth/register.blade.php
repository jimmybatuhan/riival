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
									<h3><span>RIIVAL</span> Register</h3>
									<p class="text-muted">Access to our dashboard</p>
								</div>

								<!-- Register Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

									<div class="row">

										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">First Name</label>
												<input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Last Name</label>
                        <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

											</div>
										</div>

									</div>

									<div class="form-group">

										<label class="form-control-label">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
									</div>

									<div class="row">

										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Password</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Confirm Password</label>
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
											</div>
										</div>

									</div>

									<div class="form-group">
										<div class="custom-control custom-control-xs custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="agreeCheckboxUser" id="agree_checkbox_user">
											<label class="custom-control-label" for="agree_checkbox_user">I agree to RIIVAL's</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
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
