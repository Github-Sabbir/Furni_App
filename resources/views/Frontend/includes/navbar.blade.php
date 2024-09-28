		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="{{ route('homePage') }}">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li><a class="nav-link" href="{{ route('homePage') }}">Home</a></li>
						<li><a class="nav-link" href="{{ route('shopPage') }}">Shop</a></li>
						<li><a class="nav-link" href="{{ route('aboutUsPage') }}">About us</a></li>
						<li><a class="nav-link" href="{{ route('servicePage') }}">Services</a></li>
						<li><a class="nav-link" href="{{ route('blogPage') }}">Blog</a></li>
						<li><a class="nav-link" href="{{ route('contactUsPage') }}">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="{{ asset('/') }}assets/Frontend/images/user.svg"></a></li>
						<li><a class="nav-link" href="{{ route('addToCartPage') }}"><img src="{{ asset('/') }}assets/Frontend/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->