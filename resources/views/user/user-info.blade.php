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
				<h3>Profilio informacija ir nustatymai</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
					@if(session()->has('ok'))
						<div class="notification success closeable">
							<p>{{ session('ok') }}</p>
							<a class="close" href="#"></a>
						</div>
					@endif
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
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Vardas</h5>
												<input type="text" class="with-border" value="{{ auth()->user()->name }}" readonly>
											</div>
										</div>

                                        <div class="col-xl-6">
											<div class="submit-field">
												<h5>El. paštas</h5>
												<input type="text" class="with-border" value="{{ auth()->user()->email }}">
											</div>
										</div>

                                        <div class="col-xl-6">
											<div class="submit-field">
												<h5>Slaptažodis</h5>
												<input type="text" class="with-border" value="">
											</div>
										</div>

                                        <div class="col-xl-6">
											<div class="submit-field">
												<h5>Naujas slaptažodis</h5>
												<input type="text" class="with-border" value="1">
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
					<form action="{{ isset($userInfo) ? route('userInfo.update', auth()->id()) : route('userInfo.store') }}" method="POST">
					@csrf
					@if(isset($userInfo))
					@method('PUT')
					@endif
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Pristatymo informacija</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Miestas</h5>
                                            <input type="text" name="city" class="with-border" value="{{ isset($userInfo) ? $userInfo->shipping['city'] : '' }}">
                                        </div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
                                            <div class="submit-field">
                                                <h5>Gatvė ir namo numeris</h5>
                                                <input type="text" name="adress" class="with-border" value="{{ isset($userInfo) ? $userInfo->shipping['adress'] : '' }}">
                                            </div>
										</div>
									</div>

									<div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Pašto kodas</h5>
                                            <input type="text" name="post" class="with-border" value="{{ isset($userInfo) ? $userInfo->shipping['post'] : '' }}">
                                        </div>
									</div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Tel. nr.</h5>
                                            <input type="text" name="phone" class="with-border" value="{{ isset($userInfo) ? $userInfo->shipping['phone'] : '' }}">
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
							<h3><i class="icon-material-outline-lock"></i> Sąskaitos pridėjimas</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Sąskaitos numeris</h5>
										<input type="text" name="account_nr" class="with-border" value="{{ isset($userInfo) ? $userInfo->account['account_nr'] : '' }}">
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Bankas</h5>
										<select name="bank" class="with-border">
												<option value="Swedbank">Swedbank</option>
												<option value="SEB">SEB</option>
												<option value="Šiaulių bankas">Šiaulių bankas</option>								
										</select>
									</div>
								</div>						


							</div>
						</div>
					</div>
				</div>

                <!-- Button -->
				<div class="col-xl-12">
					<div class="padding-0-30">
						<button type="submit" class="button ripple-effect big margin-top-30">Išsaugoti</button>
					</div>
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