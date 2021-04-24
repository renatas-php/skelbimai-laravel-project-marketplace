<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">
					
					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i><span>{{ $unreadNotifications->count() }}</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										@forelse($unreadNotifications as $unreadNotification)
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>€{{ $unreadNotification->data['amount'] }}.00</strong> pasiūlyta už <span class="color">makaronas</span>
												</span>
											</a>
										</li>
										@empty

										@endforelse
									</ul>
								</div>
							</div>

						</div>

					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>{{ $unreadMessages->count() }}</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Žinutės</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										@forelse($unreadMessages as $unreadMessage)
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="" alt=""></span>
												<div class="notification-text">
													<strong>{{ $userObj->userInfo($unreadMessage->data['from'])['name'] }}</strong>
													<p class="notification-msg-text">{{ $unreadMessage->data['message'] }}</p>
													<span class="color">{{ $unreadMessage->created_at->format('H:m') }}</span>
												</div>
											</a>
										</li>
										@empty

										@endforelse						
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">Visos žinutės<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					

					@livewire('cart-element')

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-user"></i></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
									<div class="user-name">
										Tom Smith
									</div>
									<button>
									<i class="icon-line-awesome-times"></i>
									</button>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch">
									<a href="{{ route('dashboard') }}" class="mini-menu-btn">Pagrindinis</a>
									<a href="" class="mini-menu-btn">Profilis</a>
								</div>	
						</div>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>