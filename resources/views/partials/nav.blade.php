<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul class="flex align-center" id="responsive">

						<li><a href="#">Kategorijos</a>
							<ul class="dropdown-nav">
							@foreach($categories as $category)
								<li><a href="{{ route('by-category', $category->id) }}">{{ $category->name }}</a></li>
							@endforeach
							</ul>
						</li>

						<li><a href="#">Maistas</a>
							<ul class="dropdown-nav">
								<li><a href="#">Browse Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
										<li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
										<li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
										<li><a href="jobs-grid-layout.html">Grid Layout</a></li>
									</ul>
								</li>
								<li><a href="#">Browse Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
										<li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
										<li><a href="tasks-grid-layout.html">Grid Layout</a></li>
										<li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
									</ul>
								</li>
								<li><a href="browse-companies.html">Browse Companies</a></li>
								<li><a href="single-job-page.html">Job Page</a></li>
								<li><a href="single-task-page.html">Task Page</a></li>
								<li><a href="single-company-profile.html">Company Profile</a></li>
							</ul>
						</li>

						<li><a href="#">Lombardas</a>
							<ul class="dropdown-nav">
								<li><a href="#">Find a Freelancer</a>
									<ul class="dropdown-nav">
										<li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
										<li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
										<li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
									</ul>
								</li>
								<li><a href="single-freelancer-profile.html">Freelancer Profile</a></li>
								<li><a href="dashboard-post-a-job.html">Post a Job</a></li>
								<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
							</ul>
						</li>
                        <li><a class="add-product" href="{{ route('product.create') }}"><i class="icon-material-outline-add-circle-outline"></i> Įdėti</a></li>
                        @guest 
                        <li class="login"><a href="{{ route('login') }}"><i class="icon-material-outline-add-circle-outline"></i> Prisijungti</a></li>
                        @endguest
                        @auth
						<li>
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-logout" type="submit"><i class="icon-line-awesome-times"></i> Atsijungti</button>
                        </form>
                        </li>
                        @endauth
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>