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
<body>

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
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Checkout</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Pricing Plans</a></li>
						<li>Checkout</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<!-- Container -->
<div class="container">
	<div class="row">

                <div class="flex-row">
                <div class="col-xl-8 col-lg-8 content-right-offset">
                <!-- Hedaline -->
                <h3>Prekės krepšelyje</h3>

                <div class="billing-cycle margin-top-25">
                    <!-- Cart Item -->                   
                        <div class="checkout-product">
                            
                            <a href="single-company-profile.html" class="product">
                                <div class="checkout-product-left">
                                    <div class="product_img">
                                        <img class="product_image" src="{{ asset('storage/photos/' . $product->images[0]) }}" alt="">
                                    </div>
                                </div>                
                            <div class="checkout-product-right">
                                <div class="headline"><h3>{{ $product->title }}</h3></div>						
                                <div class="price">{{ $product->price }}.00 Eur</div>
                                <div class="shipping-price">+ Pristatymas: {{ $product->shipping_price }}.00 Eur</div>
                                <div class="shipping-price">Pristatysime: Vasario 14d.</div>		
                                <div class="shipping-price">Pardavėjas:</div>

                                <div class="user-name-rating">
                                <span class="seller_name">renatazz42</span>						
                                </div>						
                                
                            </div>
                            </a>					
                        </div>
                    </div>                
                </div>

				<div class="col-xl-4 col-lg-4 content-right-offset">
                        <!-- Summary -->
                        <div class="boxed-widget summary margin-top-0">
                            <div class="boxed-widget-headline">
                                <h3>Apmokėjimas</h3>
                            </div>
                            <div class="boxed-widget-inner">
                                <ul>
                                
                                    <li>{{ $product->title }} 
                                    <span class="flex-column">€{{ $product->price }}.00
                                    <span>+ €{{ $product->shipping_price }}.00</span></span>
                                    </li>                                    
                                                    
                                        <li class="total-sums">Viso <span>€{{ $product->price }}.00</span></li>
                                        <li class="total-sums">Pristatymas <span>€{{ $product->shipping_price }}.00</span></li>
                                        <li class="total-costs">Iš viso <span>€{{ $product->price + $product->shipping_price }}.00</span></li>
                                                        
                                </ul>
                            </div>
                        </div>
                        <!-- Summary / End -->

                        <!-- Checkbox -->
                        <div class="checkbox margin-top-30">
                            <input type="checkbox" id="two-step">
                            <label for="two-step"><span class="checkbox-icon"></span>  I agree to the <a href="#">Terms and Conditions</a> and the <a href="#">Automatic Renewal Terms</a></label>
                        </div>
                </div>

		</div>@include('cart.cart-part')
	</div>
<!-- Container / End -->

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
@include('inc.js')
@livewireScripts
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