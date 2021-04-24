<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
@livewireStyles
@include('inc.css')

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			@include('partials.nav')
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			@auth
			@include('partials.notifications')
			@endauth
			@guest
			@include('partials.cartTop')
			@endguest
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->


@include('partials.search')
<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="accordion js-accordion">

				<!-- Accordion Item -->
				<div class="accordion__item js-accordion-item">
					<div class="accordion-header js-accordion-header text-center">Filtrai</div> 

					<!-- Accordtion Body -->
					<div class="accordion-body js-accordion-body" style="display: none;">

						<!-- Accordion Content -->
						<div class="accordion-body__contents">
			<form action="{{ route('product.index') }}" method="GET">
				<div class="flex">
						<div class="sidebar-widget flex-50 margin-right-20">
							@livewire('categories-dropdown')
						</div>
				

					<!-- Keywords -->
				<div class="flex-column">
					
						<!-- Price -->
					<div class="flex-row">
						<div class="sidebar-widget flex-1">
							<div class="price-from">
								<h3>Kaina nuo</h3>
								<div class="input-with-icon">
										<input name="price_from" type="text" placeholder="Nuo">
									<i class=""></i>
								</div>
							</div>
						</div>

						<div class="sidebar-widget flex-1">
							<div class="price-until">
								<h3>Kaina iki</h3>
								<div class="input-with-icon">
										<input name="price_until" type="text" placeholder="Iki">
									<i class=""></i>
								</div>
							</div>
						</div>
					</div>
						<!-- Price / End-->
					<!-- Search -->				
					<div class="sidebar-widget flex-1">
						<h3>Raktiniai žodžiai</h3>
						<div class="input-with-icon">
							<div id="autocomplete-container">
								<input name="search" id="autocomplete-input" type="text" placeholder="Paieška">
							</div>
						</div>
					</div>
					<!-- Search / End -->
				<!-- Job Types -->
				<div class="flex">					
					<div class="sidebar-widget ">
						<h3>Job Type</h3>
						<div class="switches-list">
							<div class="switch-container">
								<label class="switch"><input type="checkbox"><span class="switch-button"></span> Freelance</label>
							</div>

							<div class="switch-container">
								<label class="switch"><input type="checkbox"><span class="switch-button"></span> Full Time</label>
							</div>

							<div class="switch-container">
								<label class="switch"><input type="checkbox"><span class="switch-button"></span> Part Time</label>
							</div>

							<div class="switch-container">
								<label class="switch"><input type="checkbox"><span class="switch-button"></span> Internship</label>
							</div>
							<div class="switch-container">
								<label class="switch"><input type="checkbox"><span class="switch-button"></span> Temporary</label>
							</div>
						</div>
					</div>					
				</div>
				<!-- Job Types / End -->
			</div>

			</div>					
		<button type="submit" class="filter-btn">Filtruoti</button>
			</div>
			</div>				

		</form>
				

			
			

				
					</div>
					<!-- Accordion Body / End -->
				</div>
				<!-- Accordion Item / End -->


			</div>
			<div class="">
			<div class="sidebar-container">
				
				<!-- Location -->
				<!-- Tags -->
				
			</div>

			</div>
		</div>

		<div class="col-xl-12 padding-right-0 padding-left-0">
			<div class="companies-list">
            @forelse($products as $product)
				 <div class="company">
					@livewire('add-to-cart-btn', ['product' => $product])
					<div class="company-inner-alignment">
						<a href="{{ route('product.show', $product) }}">
							<div class="product_img">
								<img class="product_image" src="{{ asset('storage/photos/'.$product->images[0]) }}" alt="">
							</div>
						</a>
						<div class="price">{{ $product->price }}.00 Eur</div>
						<div class="shipping-price">+ Pristatymas: {{ $product->shipping_price }}.00 Eur</div>						
						<h4>{{ $product->title }}</h4>
						<div class="user-name-rating">
						<span class="seller_name">{{ $product->user->name }}</span>
						<div class="star-rating" data-rating="99.5"></div>
						</div>			
							<a href="{{ route('cart-product', $product) }}" class="buy_now">Pirkti dabar</a>
					</div>
				</div>
            @empty
			<div class="products-empty">
				<p>Prekių nerasta.</p>
			</div>
            @endforelse			
			</div>
		</div>

		</div>
		
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
@livewireScripts
@include('inc.js')

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>
</html>