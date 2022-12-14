@extends('layouts.master')

@section('content')
	
	@include('layouts.partials.header')
	


	<!-- ***** Welcome Area Start ***** -->
	<div class="welcome-area" id="welcome">
		<!-- ***** Header Background Image Start ***** -->
		<div class="right-bg">
			<img src="assets/images/photos/header.jpg" class="img-fluid float-right" alt="">
		</div>
		<!-- ***** Header Background Image End ***** -->

		<div class="header-hexagon-bg">
			<img src="assets/images/header-bg.svg" class="img-fluid" alt="">
		</div>

		<!-- ***** Header Text Start ***** -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12">
						<h1>Get & Earn E-Wallet system</h1>
						<p>Unlike traditional property management systems, that require days of training and are expensive, Get & Earn  takes only 10 minutes to set up.</p>
						<div class="email-box">
							<div class="input">
								<input type="email" placeholder="Enter your email">
								<button>Get started</button>
							</div>
							<span>30-day FREE trial - no credit card needed</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Header Text End ***** -->

		<!-- ***** Play Button Start ***** -->
		<div class="play-button-wrapper">
			<a href="https://www.youtube.com/watch?v=dPZTh2NKTm4" class="btn-play">
				<i class="fa fa-play"></i>
			</a>
		</div>
		<!-- ***** Play Button End ***** -->
	</div>
	<!-- ***** Welcome Area End ***** -->


	<!-- ***** Features Small Start ***** -->
	<section class="section" id="features">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">4 ways Get & Earn  helps your business succeed</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<a href="#" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-check-square-o"></i>
						</div>
						<h5 class="features-title">Manage In One Place</h5>
						<p>Morbilling pharetra sapiening ut mattis viverra. Curabitur magna.</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<a href="#" class="features-small-item active">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-bed"></i>
						</div>
						<h5 class="features-title">Selling More Rooms</h5>
						<p>Donec pellentesque turpis utium lorem imperdiet semper viverra.</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<a href="#" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-bar-chart"></i>
						</div>
						<h5 class="features-title">Know Your Numbers</h5>
						<p>Facilisis arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
					<a href="#" class="features-small-item">
						<div class="icon">
							<div class="hexagon-bg"></div>
							<i class="fa fa-shopping-cart"></i>
						</div>
						<h5 class="features-title">Fast & Secure Sales</h5>
						<p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
					</a>
				</div>
				<!-- ***** Features Small Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Features Small End ***** -->


	<!-- ***** Features Big Item Start ***** -->
	<section class="section white padding-bottom-top-60 border-bottom bg-center-right">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix"  data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
					<img src="assets/images/photos/features/green-1.png" class="img-fluid float-left" alt="App">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<div class="left-heading">
						<h2 class="section-title">Reservations Management</h2>
					</div>
					<div class="left-text">
						<p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus metus ullamcorper vel.</p>
						<ul>
							<li>Sed facilisis tempor dolor, ac mollis</li>
							<li>Donec ac lectus in lacus.</li>
							<li>Praesent mauris risus, condimentum ac placerat</li>
							<li>Quisque cursus viverra justo</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->


	<!-- ***** Features Big Item Start ***** -->
	<section class="section white padding-bottom-top-60 bg-center-left">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<div class="left-heading">
						<h2 class="section-title">Fast Reports</h2>
					</div>
					<div class="left-text">
						<p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus metus ullamcorper vel.</p>
						<ul>
							<li>Sed facilisis tempor dolor, ac mollis</li>
							<li>Donec ac lectus in lacus.</li>
							<li>Praesent mauris risus, condimentum ac placerat</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<img src="assets/images/photos/features/green-2.png" class="img-fluid float-left" alt="App">
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->


	<!-- ***** API Parallax Start ***** -->
	<section class="parallax" data-image="assets/images/photos/parallax.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="offset-lg-2 col-lg-8">
						<div class="info">
							<p>Here you'll find handy documentation about our APIs and SDKs. Choose below.</p>
						</div>
					</div>
				</div>

				<!-- ***** API & SDK Buttons Start ***** -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 api-btn-content">
						<a href="#" class="btn-api">
							<i class="fa fa-code"></i>
							<span>Web API</span>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 api-btn-content">
						<a href="#" class="btn-api">
							<i class="fa fa-apple"></i>
							<span>iOS SDK</span>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 api-btn-content">
						<a href="#" class="btn-api">
							<i class="fa fa-android"></i>
							<span>Android SDK</span>
						</a>
					</div>
				</div>
				<!-- ***** API & SDK Buttons End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** API Parallax End ***** -->


	<!-- ***** Testimonials Start ***** -->
	<section class="section" id="testimonials">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row testimonials-wrapper">
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/1.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Fletch Skinner</h3>
							<span>Mellow Mountain Hotel</span>
							<p>Nullam at venenatis dui. Suspendisse lectus lacus, ornare sed imperdiet eu, viverra vel neque. Duis nec nunc dolor. Cras non molestie sem, eu lacinia. </p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/2.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Will Barrow</h3>
							<span>Tranquil Resort & Spa</span>
							<p>Vestibulum eget imperdiet ex, posuere tempor lorem. Duis orci metus, placerat eget pharetra tempus, imperdiet vel massa. Vestibulum eget imperdiet ex.</p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/3.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Dominic L. Ement</h3>
							<span>Sunrise Paradise Hotel</span>
							<p>Pellentesque porta imperdiet porta. Integer aliquam ligula placerat placerat elementum. In euismod, neque in mattis gravida, nunc nunc euismod magna.</p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/4.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Gunther Bearder</h3>
							<span>Jade Brook Resort</span>
							<p>Proin fringilla molestie vulputate. Suspendisse vitae elit eget ipsum sagittis aliquet. Proin sagittis luctus mauris non sollicitudin. Donec dapibus.</p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/5.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Girth Wiedend</h3>
							<span>Queen's Hotel & Spa</span>
							<p>Aenean fringilla tellus nisl, placerat venenatis lectus feugiat id. Nam nisi sem, tristique vitae lectus sodales, ullamcorper gravida felis. Vestibulum.</p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="hexagon-user">
							<div class="hexagon-user-img">
								<div class="hexagon-in1">
									<div class="hexagon-in2" data-profile-img="assets/images/photos/profile/6.jpg"></div>
								</div>
							</div>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">Hanson Deck</h3>
							<span>Sublime Quest Resort</span>
							<p>Integer elementum cursus dui. Praesent dolor risus, elementum vitae arcu eu, cursus imperdiet justo. Pellentesque vel pellentesque orci. Morbi tempor.</p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Testimonials End ***** -->


	<!-- ***** Pricing Plans Start ***** -->
	<section class="section white bg-center-left" id="pricing-plans">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Pricing Plans</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">BASIC PLAN</h3>
							<div class="number-hexagon">
								<span>1</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">13.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li>Data Security and Backups</li>
								<li>Unlimited Staff Accounts</li>
								<li>Web Booking Widget</li>
								<li>Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<div class="pricing-item active">
						<div class="pricing-header">
							<h3 class="pricing-title">ADVANCED PLAN</h3>
							<div class="number-hexagon">
								<span>2</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">23.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li class="active">Data Security and Backups</li>
								<li class="active">Unlimited Staff Accounts</li>
								<li>Web Booking Widget</li>
								<li>Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">EXPERT PLAN</h3>
							<div class="number-hexagon">
								<span>3</span>
							</div>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">33.90</span>
								<span class="period">/Month</span>
							</div>
							<ul class="list">
								<li class="active">Unlimited Reservations</li>
								<li class="active">2 Clients and Products</li>
								<li class="active">Invoicing and Payments</li>
								<li class="active">Housekeeping Status</li>
								<li class="active">Data Security and Backups</li>
								<li class="active">Unlimited Staff Accounts</li>
								<li class="active">Web Booking Widget</li>
								<li class="active">Monthly Reports and Analytics</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#">Select Plan</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Pricing Plans End ***** -->


	<!-- ***** Counter Parallax Start ***** -->
	<section class="parallax-counter" data-image="assets/images/photos/parallax-counter.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>202</strong>
							<span>Happy<br>Customer</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>765</strong>
							<span>Reservation<br>Request</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>12</strong>
							<span>Color<br>Template</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>186</strong>
							<span>Staff<br>Account</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Counter Parallax End ***** -->


	<!-- ***** Blog Start ***** -->
	<section class="section white bg-center-left" id="blog">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Blog</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/1.jpg" alt="">
						</div>
						<h3>
							<a href="#">How to select the best channel manager for your hotel?</a>
						</h3>
						<div class="text">
							Mauris tellus sem, ultrices varius nisl at, convallis iaculis mauris. Sed eget sem vitae purus tempus dignissim.
						</div>
						<a href="#" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/2.jpg" alt="">
						</div>
						<h3>
							<a href="#">Find out where you earn most money ??? Get & Earn  statistics</a>
						</h3>
						<div class="text">
							Cras imperdiet faucibus sem, a dignissim urna feugiat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus.
						</div>
						<a href="#" class="btn-primary-line">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/3.jpg" alt="">
						</div>
						<h3>
							<a href="#">Earn more profits from Get & Earn  than high seasons!</a>
						</h3>
						<div class="text">
							Quisque euismod nec lacus sit amet maximus. Ut convallis sagittis lorem auctor malesuada. Morbi auctor tortor eu risus condimentum.
						</div>
						<a href="#" class="btn-primary-line">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Blog End ***** -->
@endsection