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

<div class="index-banner">
	<div class="banner-image">
		<div class="background">
			<h1 class="background-title">Discover libraries full of content with our anual subscription</h1>
			<p class="background-text">Discover libraries full of content with our anual subscription.
				Discover libraries full of content with our anual subscription
			</p>
			<div class="buttons">
				<button class="left-button">Veiksmas na</button>
				<button class="right-button">Veiksmas kitas</button>
			</div>
		</div>
		<img src="{{ asset('/images/service-web.png') }}">
	</div>
</div>

<div class="container">
	<div class="newest-items">
		<div class="newest-top-actions">
			<h1 class="title">Naujausios prekės</h1>
		</div>
		<div class="wrapper">
			<div class="new-item">
				<div class="item-image">
					<img src="{{ asset('/images/watch.jpg') }}">
				</div>
				<h1 class="title">Geros kepenys</h1>
				<p class="category">Laikrodžiai</p>
				<p class="item-price">€20.00</p>
			</div>
			<div class="new-item">
				<div class="item-image">
					<img src="{{ asset('/images/watch.jpg') }}">
				</div>
				<h1 class="title">Geros kepenys</h1>
				<p class="category">Laikrodžiai</p>
				<p class="item-price">€20.00</p>
			</div>
			<div class="new-item">
				<div class="item-image">
					<img src="{{ asset('/images/watch.jpg') }}">
				</div>
				<h1 class="title">Geros kepenys</h1>
				<p class="category">Laikrodžiai</p>
				<p class="item-price">€20.00</p>
			</div>
			<div class="new-item">
				<div class="item-image">
					<img src="{{ asset('/images/watch.jpg') }}">
				</div>
				<h1 class="title">Geros kepenys</h1>
				<p class="category">Laikrodžiai</p>
				<p class="item-price">€20.00</p>
			</div>
			<div class="new-item">
				<div class="item-image">
					<img src="{{ asset('/images/watch.jpg') }}">
				</div>
				<h1 class="title">Geros kepenys</h1>
				<p class="category">Laikrodžiai</p>
				<p class="item-price">€20.00</p>
			</div>
		</div>
	</div>
</div>
<!-- Content
================================================== -->
<!-- Category Boxes -->
<div class="section margin-top-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="top-actions">
					<h1 class="title">Visos kategorijos</h1>
				</div>

				<!-- Category Boxes Container -->
				
				<div class="categories-container">

					<!-- Category Box -->
					<div class="category-box flex-60">
						<div class="category-box-icon">
							<img src="images/pramog.png">
						</div>
						<div class="category-box-content">
							<h3>Pramogos</h3>
						<div class="subcategory-box">
						<a href="">Knygos, kinas<span>90</span></a>
						<a href="">Sportas, žaidimai<span>120</span></a>
						<a href="">Turizmas<span>20</span></a>
						<a href="">Pažintys<span>1</span></a>
						<a href="">Medžioklė, žvejyba<span>500</span></a>
						<a href="">Muzika, instrumentai<span>14</span></a>
						<a href="">Suaugusiems<span>13</span></a>
						<a href="">Pakvietimai, bilietai<span>12</span></a>
						</div>
						</div>
					</div>

					<!-- Category Box -->
					<div class="category-box">
						<div class="category-box-icon">
							<img src="images/buitis.png">
						</div>
						<div class="category-box-content">
							<h3><a href="{{ route('by-category', 1) }}">Buitis</a></h3>
							<div class="subcategory-box">
								@foreach($categoryObj->subcategoryByCat(1) as $subcategory)
								<a href="{{ route('by-subcategory', [1, $subcategory->id]) }}">{{ $subcategory->name }}<span>122</span></a>
								@endforeach
							</div>
						</div>
					</div>

					<!-- Category Box -->
					<div class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-suitcase"></i>
						</div>
						<div class="category-box-counter">186</div>
						<div class="category-box-content">
							<h3>Accounting & Consulting</h3>
							<div class="subcategory-box">
							<a href="">Knygos, kinas<span>90</span></a>
							<a href="">Sportas, žaidimai<span>120</span></a>
							<a href="">Turizmas<span>20</span></a>
							<a href="">Pažintys<span>1</span></a>
							<a href="">Medžioklė, žvejyba<span>500</span></a>
							<a href="">Muzika, instrumentai<span>14</span></a>
							<a href="">Suaugusiems<span>13</span></a>
							<a href="">Pakvietimai, bilietai<span>12</span></a>
							</div>
						</div>
					</div>

					<!-- Category Box -->
					<div class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-pencil"></i>
						</div>
						<div class="category-box-counter">298</div>
						<div class="category-box-content">
							<h3>Writing & Translations</h3>
							<div class="subcategory-box">
							<a href="">Knygos, kinas<span>90</span></a>
							<a href="">Sportas, žaidimai<span>120</span></a>
							<a href="">Turizmas<span>20</span></a>
							<a href="">Pažintys<span>1</span></a>
							<a href="">Medžioklė, žvejyba<span>500</span></a>
							<a href="">Muzika, instrumentai<span>14</span></a>
							<a href="">Suaugusiems<span>13</span></a>
							<a href="">Pakvietimai, bilietai<span>12</span></a>
							</div>
						</div>
					</div>

					<!-- Category Box -->
					<a href="jobs-list-layout-2.html" class="category-box">
						<div class="category-box-icon">
							<img src="images/transpo.png">
						</div>
						<div class="category-box-counter">549</div>						
						<div class="category-box-content">
							<h3>Transportas</h3>
							<p>Brand Manager, Marketing Coordinator & More</p>
						</div>
					</a>

					<!-- Category Box -->
					<a href="jobs-list-layout-1.html" class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-image"></i>
						</div>
						<div class="category-box-counter">873</div>
						<div class="category-box-content">
							<h3>Kompiuterija</h3>
							<p>Creative Director, Web Designer & More</p>
						</div>
					</a>

					<!-- Category Box -->
					<a href="jobs-list-layout-2.html" class="category-box flex-60">
						<div class="category-box-icon">
							<img src="images/technika.png">
						</div>
						<div class="category-box-counter">125</div>
						<div class="category-box-content">
							<h3>Technika</h3>
							<p>Darketing Analyst, Social Profile Admin & More</p>
						</div>
					</a>

					<!-- Category Box -->
					<a href="jobs-grid-layout-full-page.html" class="category-box flex-47">
						<div class="category-box-icon">
							<img src="images/drabuz.png">
						</div>
						<div class="category-box-counter">445</div>
						<div class="category-box-content">
							<h3>Drabužiai, avalynė</h3>
							<p>Advisor, Coach, Education Coordinator & More</p>
						</div>
					</a>
					<!-- Category Box -->
					<a href="jobs-grid-layout-full-page.html" class="category-box flex-47">
						<div class="category-box-icon">
							<img src="images/vaikams.png">							
						</div>
						<div class="category-box-counter">445</div>
						<div class="category-box-content">
							<h3>Auginantiems vaikus</h3>
							<p>Advisor, Coach, Education Coordinator & More</p>
						</div>
					</a>				

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->


<!-- Membership Plans -->
<div class="section padding-top-60 padding-bottom-75">
	<div class="container">
		<div class="row">

		
				<!-- Pricing Plans Container -->
				<div class="image-slider">

				
					
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Membership Plans / End-->

<!-- Footer
================================================== -->
<div id="footer">
	

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row align-center">

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
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-6 col-lg-6 col-md-12 flex justify-end">
					<img class="footer-img" src="images/sports.png">
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


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"></script>

</body>
</html>