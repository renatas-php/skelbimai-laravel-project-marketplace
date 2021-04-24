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
							<li><a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{ route('messages-index') }}"><i class="icon-material-outline-question-answer"></i> Žinutės <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Mano prekės</a>
								<ul>
									<li><a href="{{ route('my-products') }}">Aktyvios prekės <span class="nav-tag">3</span></a></li>
									<li><a href="{{ route('my-sold-products') }}">Parduotos prekės</a></li>
									<li><a href="{{ route('price-offers') }}">Kainų pasiūlymai</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Mano pirkimai</a>
								<ul>
									<li><a href="{{ route('my-buyed-products') }}">Pirktos prekės <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
									<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
								</ul>	
							</li>
						</ul>
						<ul data-submenu-title="Account">
						@if(auth()->user()->userInfos)
						<li><a href="{{ route('userInfo.edit', auth()->id()) }}"><i class="icon-material-outline-settings"></i> Nustatymai</a></li>
						@else
						<li><a href="{{ route('userInfo.create') }}"><i class="icon-material-outline-settings"></i> Nustatymai</a></li>
						@endif							
						<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>