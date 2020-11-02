<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	@endif
	<!-- /Loader  -->
	<!-- Header -->
	<header class="header">
				<div class="header-fixed">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="/" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="/" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="<?php if($page=="coaches") { echo 'active'; } ?>"><a href="/coaches">Coaches</a></li>
							<li class="<?php if($page=="courses") { echo 'active'; } ?>"><a href="">Courses</a></li>
							<li class="<?php if($page=="blog") { echo 'active'; } ?>"><a href="">Blogs</a></li>
							<li class="<?php if($page=="subscription") { echo 'active'; } ?>"><a href="">Subscription</a></li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">

					@guest
						<li class="nav-item">
							<a class="nav-link" href="/login">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="/register">Register</a>
						</li>
						@endguest

						@auth
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/user/user.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>{{ Auth::User()->first_name }} {{ Auth::User()->last_name }}</h6>
										<p class="text-muted mb-0">{{ Auth::User()->email }}</p>
									</div>
								</div>
								<a class="dropdown-item" href="/dashboard">Dashboard</a>
								<a class="dropdown-item" href="">Profile Settings</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
										Logout</a>
							</div>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
							</form>

						</li>
						<!-- /User Menu -->
						@endauth
					</ul>

				</nav>
				</div>
			</header>
			<!-- /Header -->
<div class="main-wrapper">
