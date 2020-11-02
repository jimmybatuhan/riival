@extends('layout.mainlayout')
@section('content')
<!-- Page Content -->
<div class="bg-pattern-style">
				<div class="content">

					<!-- Login Tab Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3>Back to <span>Grinding</span></h3>
									<p class="text-muted">Access to our dashboard</p>
								</div>
								<form method="POST" action="{{ route('login') }}">
										@csrf
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
										@enderror
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

											@error('password')
													<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
													</span>
											@enderror

											<span class="fas fa-eye toggle-password"></span>
										</div>
									</div>
									<div class="text-right">
										<a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
									</div>
									<button class="btn btn-primary login-btn" type="submit">Login</button>
									<div class="text-center dont-have">Don’t have an account? <a href="register">Register</a></div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login Tab Content -->

				</div>

			</div>
			<!-- /Page Content -->
@endsection
