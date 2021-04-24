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
			@include('partials.notifications')
			<!-- Right Side Content / End -->
			
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
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Valdymo panelė</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Žinutės <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Įvertinimai</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Mano prekės</a>
								<ul>
									<li><a href="dashboard-manage-jobs.html">Aktyvios prekės <span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">Parduotos prekės</a></li>
									<li><a href="dashboard-post-a-job.html">Kainų pasiūlymai</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Mano pirkiniai</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Visi pirkiniai <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Kainų siūlymai</a></li>
									<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Profilis">
							<li class="active"><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Profilio informacija</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Įkelti prekę</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{ url()->previous() }}">Atgal</a></li>
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
							<h3><i class="icon-material-outline-account-circle"></i> Pagrindinė informacija</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<!-- <div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*"/>
									</div>
								</div> -->

								<div class="col">
								<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="row">                                    
										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Prekės pavadinimas</h5>
												<input type="text" class="with-border" name="title" value="{{ isset($product) ? $product->title : '' }}">
											</div>
										</div>

										<div class="col-xl-12">
										@livewire('categories-dropdown')
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Prekės būklė</h5>
												<div class="account-type">
													<div>
														<input type="radio" name="condition" value="0"
														@isset($product)
														@if($product->condition == 0)
														checked 
														@endif
														@endisset 
														id="freelancer-radio" class="account-type-radio" />
														<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Nauja</label>
													</div>

													<div>
														<input type="radio" name="condition" value="1" 
														@isset($product)
														@if($product->condition == 1)
														checked 
														@endif
														@endisset 
														id="employer-radio" class="account-type-radio" />
														<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Naudota</label>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Turimas kiekis</h5>
												<input type="text" name="qty" class="with-border" value="{{ isset($product) ? $product->qty : '' }}">
											</div>
										</div>

									</div>
                                    
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Aprašymas ir nuotraukos</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-8">
										<div class="submit-field">
											<h5>Attachments</h5>
											
											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
											@isset($product)
												@foreach($product->images as $image)
												<div class="attachment-box ripple-effect">
													<img src="{{ asset('storage/photos/' . $image) }}">
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
												@endforeach
											@endisset
											</div>
											<div class="clearfix"></div>
											
											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" name="images[]" type="file" id="images" multiple/>
												<label class="uploadButton-button ripple-effect" for="images">Įkelti nuotraukas</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Aprašymas</h5>
											<textarea cols="30" rows="5" name="description" class="with-border">{{ isset($product) ? $product->description : '' }}</textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Kaina ir pristatymas</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Kaina</h5>
										<input type="text" name="price" class="with-border" value="{{ isset($product) ? $product->price : '' }}">
									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Pristatymo kaina</h5>
										<input type="text" name="shipping_price" class="with-border" value="{{ isset($product) ? $product->shipping_price : '' }}">
									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Pristatymo trukmė</h5>
										<input type="text" name="shipping_length" class="with-border" value="{{ isset($product) ? $product->shipping_length : '' }}">
									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">
										<h5>Prekės lokacija</h5>
										<select name="city_id" class="selectpicker with-border" title="Select Job Type" data-live-search="true">
												<option value="1">Argentina</option>
												<option value="2">Armenia</option>
												<option value="3">Aruba</option>
												<option value="4">Australia</option>
												<option value="5">Austria</option>								
										</select>
									</div>
								</div>

								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Išsaugoti</button>
				</div>
            </form>
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
@livewireScripts
@include('inc.js')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->

<script>
$('#subcategory-div').hide();
$('#category').on('change', function(e) {
	$('#subcategory-div').show();
	let cat_id = e.target.value;

	//ajax
	$.get('subcategories?subcat_id=' + cat_id, function(data) {

		
		console.log(data);
		$('#subcategory').empty();
		$.each(data, function(index, value) {
			$('#subcategory').append('<option value="'+ value.id+ '">'+ value.name +'</option>');
		});
	});
});
</script>
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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

</body>
</html>