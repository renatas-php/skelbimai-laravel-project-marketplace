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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
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
<div class="single-page-header freelancer-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<input class="search-input" name="search" placeholder="Paieška">
						<button class="search-input-btn"><i class="icon-material-outline-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<div class="single-product-image">
					<img class="single-product-image" id="current-image" src="{{ asset('storage/photos/'.$product->images[0]) }}" alt="">
				</div>
				<div class="single-product-images">
                @foreach($product->images as $image)
					<img class="images" src="{{ asset('storage/photos/'.$image) }}" alt="">
                @endforeach
				</div>
				<h3 class="margin-bottom-10 margin-top-35">Aprašymas</h3>
				<p>{{ $product->description }}</p>
			</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				<div class="sidebar-widget">
					<h3 class="text-center">{{ $product->title }}</h3>
					<div class="single-product-city"><h1>Miestas:</h1>
					<p>Vilnius</p>
					</div>
					<h6 class="price">{{ $product->price }}.00 Eur</h6>					
				</div>
				
				<!-- Profile Overview -->
				

				<!-- Button -->
				<a href="{{ route('cart-product', $product) }}" class="buy-now margin-bottom-10">Pirkti dabar <i class="icon-material-outline-arrow-right-alt"></i></a>
				@livewire('add-to-cart-btn-single', ['product' => $product])

				<div class="profile-overview">
					<div class="overview-item"><strong>€{{ $product->shipping_price }}.00</strong><span>Pristatymo kaina</span></div>
					<div class="overview-item"><strong>{{ $product->shipping_length }} d.d.</strong><span>Pristatymo terminas</span></div>
					
				</div>

				<!-- Freelancer Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">
						
						<div class="single-product-user-info">
							<img src="images/user-avatar-placeholder.png" class="user-avatar"></img>
							<a href="{{ route('user', $product->user) }}"><h5 class="user-name">{{ $product->user->name }} </h5></a>
							<div class="star-rating" data-rating="99.5"></div>
						</div>
						<div class="single-product-extra-info">
							<div class="extra-info-title"><h1>Užsiregistravo:</h1>
								<p>{{ $product->user->created_at->format('Y-m-d') }}</p>
							</div>
							<div class="extra-info-title"><h1>Įdėjo skelbimų:</h1>
								<p>{{ $product->user->products->count() }}</p>
							</div>
						</div>						
					</div>
				</div>
				<button type="button" class="add-to-cart margin-bottom-30" data-toggle="modal" data-target="#priceOfferModal">Pasiūlyti kainą <i class="icon-material-outline-local-atm"></i><button>
				<!-- Widget -->
				<div class="sidebar-widget">
					
					<div class="freelancer-socials margin-top-25">
						<ul>
							<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
							<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
							<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
							<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>
						
						</ul>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Skills</h3>
					<div class="task-tags">
						<span>iOS</span>
						<span>Android</span>
						<span>mobile apps</span>
						<span>design</span>
						<span>Python</span>
						<span>Flask</span>
						<span>PHP</span>
						<span>WordPress</span>
					</div>
				</div>				

			</div>
		</div>
	<!-- Boxed List -->
	<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Atsiliepimai apie pardaveja</h3>
				</div>
				<ul class="boxed-list-ul">
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>Web, Database and API Developer <span>Rated as Freelancer</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="5.0"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> August 2019</div>
								</div>
								<div class="item-description">
									<p>Excellent programmer - fully carried out my project in a very professional manner. </p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>WordPress Theme Installation <span>Rated as Freelancer</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="5.0"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> June 2019</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="pagination-container margin-top-40 margin-bottom-10">
					<nav class="pagination">
						<ul>
							<li><a href="#" class="ripple-effect current-page">1</a></li>
							<li><a href="#" class="ripple-effect">2</a></li>
							<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
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


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make an Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project with David</h3>
				</div>
					
				<!-- Form -->
				<form method="post">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
						<label class="uploadButton-button ripple-effect" for="upload">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			<div class="popup-tab-content" id="loginn">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss Your Project With Tom</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="make-an-offer-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name2" id="name2" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress2" id="emailaddress2" placeholder="Email Address" required/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" multiple/>
						<label class="uploadButton-button" for="upload-cv">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="make-an-offer-form">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Make an Offer Popup / End -->
@livewire('price-offer-modal', ['product_id' => $product->id])
<!-- Scripts
================================================== -->
@livewireScripts
@include('inc.js')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
	(function () {

		const currentImage = document.querySelector('#current-image');
		const images = document.querySelectorAll('.single-product-images img');

		images.forEach((element) => element.addEventListener('click', function () {
			currentImage.src = this.src;

			images.forEach((element) => element.classList.remove('selected-img'));
			this.classList.add('selected-img');
		}));

	}) ();
</script>
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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 

</script>

</body>
</html>