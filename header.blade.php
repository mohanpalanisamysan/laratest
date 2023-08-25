<header class="navbar-light shadow header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="{{ url('/')}}">
				<img class="light-mode-item navbar-brand-item" src="{{ url('/public/assets/images/logo.svg') }}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{ url('/public/assets/images/logo-light.svg') }}" alt="logo">
			</a>
			<!-- Logo END -->
			
			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto mx-3 me-xl-0 p-0 p-sm-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<!-- Nav traveler menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle rounded px-3 py-3 py-xl-0" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa-solid fa-suitcase-rolling me-2"></i> Explore Features
						</a>
						<ul class="dropdown-menu" aria-labelledby="categoryMenu">
	
							<!-- Campus Hiring -->
							<li class="mb-1">
								<a href="#" class="dropdown-item bg-light-hover d-flex align-items-center rounded p-2">
									<!-- Icon -->
									<div class="icon-md bg-primary bg-opacity-10 rounded text-primary flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>
									<div class="ms-2">
										<h6 class="mb-0">Campus Hiring</h6>
										<p class="small mb-0 text-body">10 + Campus Interviews</p>
									</div>
								</a>	
							</li>
							
							<!-- Internships -->
							<li class="mb-1">
								<a href="#" class="dropdown-item bg-light-hover d-flex align-items-center rounded p-2 active">
									<!-- Icon -->
									<div class="icon-md bg-primary bg-opacity-10 rounded text-primary flex-shrink-0"><i class="fa-solid fa-plane"></i></div>
									<div class="ms-2">
										<h6 class="mb-0">Internships</h6>
										<p class="small mb-0 text-body">Small description here</p>
									</div>
								</a>	
							</li>
	
							<!-- Tech Symposiums -->
							<li class="mb-1">
								<a href="#" class="dropdown-item bg-light-hover d-flex align-items-center rounded p-2">
									<!-- Icon -->
									<div class="icon-md bg-primary bg-opacity-10 rounded text-primary flex-shrink-0"><i class="fa-solid fa-earth-americas"></i></div>
									<div class="ms-2">
										<h6 class="mb-0">Tech Symposiums</h6>
										<p class="small mb-0 text-body">Small description here</p>
									</div>
								</a>	
							</li>
	
							<!-- Fresher Jobs -->
							<li class="mb-1">
								<a href="#" class="dropdown-item bg-light-hover d-flex align-items-center rounded p-2">
									<!-- Icon -->
									<div class="icon-md bg-primary bg-opacity-10 rounded text-primary flex-shrink-0"><i class="fa-solid fa-car"></i></div>
									<div class="ms-2">
										<h6 class="mb-0">Fresher Jobs</h6>
										<p class="small mb-0 text-body">Small description here</p>
									</div>
								</a>	
							</li>
	
							<!-- Fresher Jobs -->
							<li class="mb-1">
								<a href="{{ url('/student-profiles/student-profiles')}}" class="dropdown-item bg-light-hover d-flex align-items-center rounded p-2">
									<!-- Icon -->
									<div class="icon-md bg-primary bg-opacity-10 rounded text-primary flex-shrink-0"><i class="fa-solid fa-car"></i></div>
									<div class="ms-2">
										<h6 class="mb-0">Student Profiles</h6>
										<p class="small mb-0 text-body">Small description here</p>
									</div>
								</a>	
							</li>
						</ul>
					</li>
				</ul>
				<!-- Nav traveler menu END -->

				<!-- Nav main menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item Listing -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">
							<!-- Dropdown submenu -->
							<li> <a class="dropdown-item" href="#">Menu Item</a></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">submenu Items</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="#">Submenu item 1</a></li>
									<li> <a class="dropdown-item" href="#">Submenu item 2</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pageMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pageMenu">
							<!-- Dropdown submenu -->
							<li> <a class="dropdown-item" href="#">Menu Item 1</a></li>
							<li> <a class="dropdown-item" href="#">Menu Item 2</a></li>
						</ul>
					</li>

					<!-- Nav item Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accountMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
						<ul class="dropdown-menu" aria-labelledby="accountMenu">
							<!-- Dropdown submenu -->
							<li> <a class="dropdown-item" href="#">Menu Item 1</a></li>
							<li> <a class="dropdown-item" href="#">Menu Item 2</a></li>
						</ul>
					</li>

				</ul>
				<!-- Nav main menu END -->
			</div>
			<!-- Main navbar END -->

			<!-- Navbar right side START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

				<!-- Search -->
				<li class="nav-item dropdown nav-search me-2">
					<a class="nav-link mb-0 py-0" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-display="static">
						<i class="bi bi-search fs-5"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
						<form class="input-group">
							<input class="form-control border-primary" type="search" placeholder="Search..." aria-label="Search">
							<button class="btn btn-primary m-0" type="submit">Search</button>
						</form>
					</div>
				</li>

				@if (Auth::check())

				<!-- If User Logged in button -->
				<li class="nav-item dropdown">
					<!-- Avatar -->
					<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-2" src="{{ url('/public/assets/images/avatar/01.jpg') }}" alt="avatar">
					</a>

					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="{{ url('/public/assets/images/avatar/01.jpg') }}" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">{{ Auth::user()->name }}</a>
									<p class="small m-0">{{ Auth::user()->email }}</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item small" href="{{ url('dashboard')}}"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Dashboard</a></li>
						<li><a class="dropdown-item small" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item small" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="{{ url('logout') }}"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li> <hr class="dropdown-divider"></li>

						<!-- Dark mode options START -->
						<li>
							<div class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
								<span>Mode:</span>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
										<use href="#"></use>
									</svg>
								</button>
							</div>
						</li> 
						<!-- Dark mode options END-->
					</ul>
				</li>

				@else
				<!-- Sign In button -->
				<li class="nav-item ms-2 d-none d-sm-block">
					<a href="{{ url('login')}}" class="btn btn-sm btn-dark-soft mb-0"><i class="fa-solid fa-sign-in me-2"></i>Sign In</a>
				</li>

				<!-- Sign UP button -->
				<li class="nav-item ms-2 d-none d-sm-block">
					<a href="{{ url('register')}}" class="btn btn-sm btn-primary mb-0"><i class="fa-solid fa-user-plus me-2"></i>Sign Up</a>
				</li>
				@endif

			</ul>
			<!-- Navbar right side END -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->