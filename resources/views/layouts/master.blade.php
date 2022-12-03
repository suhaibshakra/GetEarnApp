<!DOCTYPE html>
<html lang="en">

	@include('layouts.head')

<body>

	<!-- ***** Preloader Start ***** -->
	<div class="preloader-wrapper">
		<div class="slice"></div>
		<div class="slice"></div>
		<div class="slice"></div>
		<div class="slice"></div>
		<div class="slice"></div>
		<div class="slice"></div>
	</div>
	<!-- ***** Preloader End ***** -->
	

	
	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="#" class="logo">
							<img src="assets/images/logo-green.png" alt="Get & Earn "/>
						</a>
						<!-- ***** Logo End ***** -->


						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="#welcome">Home</a></li>
							<li><a href="green-contact.html">Login</a></li>
							<li><a href="#" class="btn-nav-line"><span>Sing up</span></a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->						
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

    @yield('content')


	@include('layouts.footer')
</body>
</html>