	<!-- Footer -->
	<footer class="footer">

				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Gamers</h2>
									<ul>
										<li><a href="search">Search Coaches</a></li>
										<li><a href="login">Login</a></li>
										<li><a href="register">Register</a></li>
										<li><a href="">Subscriptions</a></li>
										<li><a href="dashboard">Gamer Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Coaches</h2>
									<ul>
										<li><a href="login">Login</a></li>
										<li><a href="dashboard">Coach Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											info@riival.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-12 text-center">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2020 RIIVAL. All rights reserved.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->
			</div>
			@if(Route::is(['schedule-timings']))
		<!-- Add Time Slot Modal -->
		<div class="modal fade custom-modal" id="add_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Time Slot Modal -->

		<!-- Edit Time Slot Modal -->
		<div class="modal fade custom-modal" id="edit_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>Select</option>
														<option>12.00 am</option>
														<option>1.00 am</option>
														<option>2.00 am</option>
														<option>3.00 am</option>
														<option>4.00 am</option>
														<option>5.00 am</option>
														<option>6.00 am</option>
														<option>7.00 am</option>
														<option>8.00 am</option>
														<option>9.00 am</option>
														<option>10.00 am</option>
														<option>11.00 am</option>
														<option>12.00 pm</option>
														<option>1.00 pm</option>
														<option>2.00 pm</option>
														<option>3.00 pm</option>
														<option>4.00 pm</option>
														<option>5.00 pm</option>
														<option>6.00 pm</option>
														<option>7.00 pm</option>
														<option>8.00 pm</option>
														<option>9.00 pm</option>
														<option>10.00 pm</option>
														<option>11.00 pm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Time Slot Modal -->
	  @endif
	  @if(Route::is(['profile-mentee','profile']))
	  <!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
										<h4>Jonathan Doe</h4>
										<span>Connecting...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->

		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
										<h4>Dr. Darren Elder</h4>
										<span>Calling ...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
		@endif
		@if(Route::is(['blog']))
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p></p>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if(Route::is(['chat']))
		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
										<h4>Marvin Downey</h4>
										<span>Connecting...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->

		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
										<h4>Richard Wilson</h4>
										<span>Calling ...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
		@endif
		@if(Route::is(['chat-mentee']))
		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
										<h4>Richard Wilson</h4>
										<span>Connecting...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->

		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
										<h4>Richard Wilson</h4>
										<span>Calling ...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
		@endif
		@if(Route::is(['appointments']))
		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Appointment Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-6">
											<span class="title">#APT0001</span>
											<span class="text">21 Oct 2019 10:00 AM</span>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span class="title">Status:</span>
								<span class="text">Completed</span>
							</li>
							<li>
								<span class="title">Confirm Date:</span>
								<span class="text">29 Jun 2019</span>
							</li>
							<li>
								<span class="title">Paid Amount</span>
								<span class="text">$450</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
		@endif
