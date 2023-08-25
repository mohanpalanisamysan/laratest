	<!-- Sidebar START -->
	<nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="{{ url('dashboard')}}">
				<img class="light-mode-item navbar-brand-item" src="{{ url ('/public/assets/images/logo.svg') }}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{ url ('/public/assets/images/logo-light.svg') }}" alt="logo">
			</a>
		</div>
		<!-- Navbar brand for xl END -->
		
		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
	

			<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar">
					<!-- Menu item -->
					<li class="nav-item"><a href="{{ url('/dashboard') }}" 
					class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
						Dashboard</a></li>

					<!-- Menu item -->
					<li class="nav-item">

						<a class="nav-link" data-bs-toggle="collapse" href="#profile" role="button" 
						aria-expanded="@if(Request::segment(2) == 'adminprofile') true @endif" aria-controls="profile">
						Users
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="profile" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> 
								<a class="nav-link @if(Request::segment(4) == 'users-list') active @endif" href="{{ url('/admin/dashboard/users/users-list') }}">
								<i class="bi bi-person fa-fw me-2"></i>Users</a>
							</li>
							<li class="nav-item"> 
								<a class="nav-link @if(Request::segment(4) == 'new-users-list') active @endif" href="{{ url('/admin/dashboard/users/new-users-list') }}">
								<i class="bi bi-person fa-fw me-2"></i>Users-Pending Approval</a>
							</li>
							<li class="nav-item"> 
								<a class="nav-link @if(Request::segment(4) == 'new-users-anonymous-list') active @endif" href="{{ url('/admin/dashboard/users/new-users-anonymous-list') }}">
								<i class="bi bi-person fa-fw me-2"></i>Users-Anonymous</a>
							</li>
						</ul>
						
					</li>

					<!-- Menu item -->
					<li class="nav-item">

						<a class="nav-link" data-bs-toggle="collapse" href="#academics" role="button" 
						aria-expanded="@if(Request::segment(2) == 'academics') true @endif" aria-controls="academics">
						Academics
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="academics" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link @if(Request::segment(3) == 'schools') active @endif" href="{{ url('/admin/dashboard/schools/school-list') }}">
								<i class="bi bi-mortarboard-fill fa-fw me-2"></i>Schools</a></li>
							<li class="nav-item"> <a class="nav-link @if(Request::segment(3) == 'class') active @endif" href="{{ url('/admin/dashboard/class/class-list') }}">
								<i class="bi bi-diagram-3-fill fa-fw me-2"></i>Class</a></li>
						</ul>
					</li>

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Students Development</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#johnwhitemore" role="button" 
						aria-expanded="@if(Request::segment(2) == 'johnwhitemore') true @endif" aria-controls="johnwhitemore">
						John WhiteMore
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="johnwhitemore" data-bs-parent="#johnwhitemore">
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'johnwhitemore') active @endif"
							 href="{{ url('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>JWM Categories</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#swot" role="button" 
						aria-expanded="@if(Request::segment(2) == 'swot') true @endif" aria-controls="swot">
						SWOT Analysis
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="swot" data-bs-parent="#swot">
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'swot') active @endif" 
							href="{{ url('/admin/dashboard/students/dev/swot/swotcategories-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>Swot Categories</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#swot" role="button" 
						aria-expanded="@if(Request::segment(2) == 'swot') true @endif" aria-controls="swot">
						Leadership Practice
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="swot" data-bs-parent="#swot">
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'leadership') active @endif" 
							href="{{ url('/admin/dashboard/students/dev/leadership/leadershipcategories-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>Leadership Categories</a></li>
						</ul>
					</li>

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Soft Skills</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#swot" role="button" 
						aria-expanded="@if(Request::segment(2) == 'swot') true @endif" aria-controls="swot">
						Soft Skills
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="swot" data-bs-parent="#swot">
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'softskillscategories') active @endif" 
							href="{{ url('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>SoftSkill Categories</a></li>
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'softskillscourses') active @endif" 
							href="{{ url('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>SoftSkill Course</a></li>
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'softskillsunits') active @endif" 
							href="{{ url('/admin/dashboard/students/softskills/softskillsunits/units-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>Course Units</a></li>
							<li class="nav-item"> <a class="nav-link @if(Request::segment(5) == 'softskillsmodules') active @endif" 
							href="{{ url('/admin/dashboard/students/softskills/softskillsmodules/modules-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>Course Modules</a></li>
							<li class="nav-item"> <a class="nav-link @if(Request::segment(6) == 'chapters-list') active @endif"
							href="{{ url('/admin/dashboard/students/softskills/chapters/chapters-list') }}">
								<i class="bi bi-arrow-right-square fa-fw me-2"></i>Course Chapters</a></li>
						</ul>
					</li>

				</ul>
				<!-- Sidebar menu end -->
	
				<!-- Sidebar footer START -->
				<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
					<a class="h6 fw-light mb-0 text-body" href="{{ url('logout') }}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
						<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
					</a>
					<a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
						<i class="bi bi-gear-fill"></i>
					</a>
				</div>
				<!-- Sidebar footer END -->
				
			</div>
		</div>
	</nav>
	<!-- Sidebar END -->