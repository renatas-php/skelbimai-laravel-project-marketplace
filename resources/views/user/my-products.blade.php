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
@include('inc.css')

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			@include('partials.nav')
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			@include('partials.notifications')
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
    @include('partials.sidebar')
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Jobs</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Jobs</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> Mano prekių sąrašas</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                            @forelse(auth()->user()->products as $product)
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<div class="job-listing-company-logo">
												<img src="{{ asset('storage/photos/' . $product->images[0]) }}" alt="">
											</div>
										 

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{ $product->title }}</a> <span class="dashboard-status-button green">Aktyvus</span></h3>
												<div class="price"><i class="icon-material-outline-local-atm"></i> {{ $product->price }}.00 Eur</div>
												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Kiekis: {{ $product->qty }} vnt.</li>
														<li><i class="icon-material-outline-date-range"></i> Galioja iki 28 Rugpjucio, 2019</li>
													</ul>
												</div>
												<div class="price"><i class="icon-material-outline-visibility"></i>Peržiūrėtas 195</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="{{ route('price-offersBy', $product) }}" class="button ripple-effect">Kainų pasiūlymai <span class="button-info">{{ $product->offers->count() }}</span></a>
										<a href="{{ route('product.edit', $product) }}" class="button gray ripple-effect ico" title="Redaguoti" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Ištrinti" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
                            @empty
                            @endforelse
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">VW Tiguan 2019 multimedija</a> <span class="dashboard-status-button yellow">2015.00 Eur</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Patalpintas 28 Liepos, 2019</li>
														<li><i class="icon-material-outline-date-range"></i> Galioja iki 28 Rugpjucio, 2019</li>
													</ul>
												</div>
											</div>

										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">3</span></a>
										<a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>

								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Node.js Developer</a> <span class="dashboard-status-button red">Expired</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 16 May, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">7</span></a>
										<a href="#" class="button dark ripple-effect"><i class="icon-feather-rotate-ccw"></i> Refresh</a>
										<a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
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