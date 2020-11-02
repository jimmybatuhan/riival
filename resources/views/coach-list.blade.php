<?php $page="search";?>
@extends('layout.mainlayout')
@section('content')		

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">2245 matches found for : Mentors In  Florida</h2>
						</div>
						<div class="col-md-4 col-12 d-md-block d-none">
							<div class="sort-by">
								<span class="sort-title">Sort by</span>
								<span class="sortby-fliter">
									<select class="select">
										<option>Select</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Latest</option>
										<option class="sorting">Free</option>
									</select>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<div class="cal-icon">
										<input type="text" class="form-control datetimepicker" placeholder="Select Date">
									</div>			
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Courses</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Digital Marketer

										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> UNIX, Calculus, Trigonometry
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Computer Programming
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> ASP.NET,Computer Gaming
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> HTML, Css
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> VB, VB.net
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">

							<!-- Mentor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="profile">
													<img src="assets/img/user/user.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="profile">Ruby Perrin</a></h4>
												<p class="mentor-type">Digital Marketer</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(17)</span>
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												<ul>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
												</ul>
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="booking">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Mentor Widget -->

							<!-- Mentor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="profile">
													<img src="assets/img/user/user1.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="profile">Darren Elder</a></h4>
												<p class="mentor-type">Digital Marketer</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(35)</span>
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												<ul>
													<li><i class="far fa-comment"></i> 35 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="booking">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Mentor Widget -->

							<!-- Mentor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="profile">
													<img src="assets/img/user/user2.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="profile">Deborah Angel</a></h4>
												<p class="mentor-type">UNIX, Calculus, Trigonometry</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(27)</span>
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												<ul>
													<li><i class="far fa-comment"></i> 35 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="booking">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Mentor Widget -->

							<!-- Mentor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="profile">
													<img src="assets/img/user/user4.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="profile">Sofia Brient</a></h4>
												<p class="mentor-type">Computer Programmin</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(4)</span>
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> Louisiana, USA</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												<ul>
													<li><i class="far fa-comment"></i> 4 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $150 - $250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="booking">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Mentor Widget -->

							<!-- Mentor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="mentor-widget">
										<div class="user-info-left">
											<div class="mentor-img">
												<a href="profile">
													<img src="assets/img/user/user5.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="user-info-cont">
												<h4 class="usr-name"><a href="profile">Katharine Berthold</a></h4>
												<p class="mentor-type">ASP.NET, Computer Gaming</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(52)</span>
												</div>
												<div class="mentor-details">
													<p class="user-location"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
												</div>
											</div>
										</div>
										<div class="user-info-right">
											<div class="user-infos">
												<ul>
													<li><i class="far fa-comment"></i> 52 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $100 - $500 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="mentor-booking">
												<a class="apt-btn" href="booking">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Mentor Widget -->

							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>	
							</div>	
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
@endsection