
<!DOCTYPE html>
<html lang="en">
<head>
	<title>JrMajestic - Campus Hiring App</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="JrMajestic - Campus Hiring Platform">

	<!-- Favicon -->
	<link rel="shortcut icon" href=" {{ url('/public/assets/images/favicon.ico') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/glightbox/css/glightbox.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/flatpickr/css/flatpickr.min.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/stepper/js/bs-stepper.min.js') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/quill/css/quill.snow.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/vendor/dropzone/css/dropzone.css') }}">


	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ url('/public/assets/css/custom-style.css') }}">

</head>

<body class="has-navbar-mobile">

<!-- Header START -->

<!-- Header START -->
@include('home.layouts.header') 

<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

@yield('content')


</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Footer START -->

@include('home.layouts.footer') 

<!-- Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Navbar mobile START -->
<div class="navbar navbar-mobile">
	<ul class="navbar-nav">
		<!-- Nav item Home -->
		<li class="nav-item">
			<a class="nav-link active" href="index.html"><i class="bi bi-house-door fa-fw"></i>
				<span class="mb-0 nav-text">Home</span>
			</a>	
		</li>

		<!-- Nav item My Trips -->
		<li class="nav-item"> 
			<a class="nav-link" href="account-bookings.html"><i class="bi bi-briefcase fa-fw"></i>
				<span class="mb-0 nav-text">My Trips</span>
			</a>	
		</li>

		<!-- Nav item Offer -->
		<li class="nav-item"> 
			<a class="nav-link" href="offer-detail.html"><i class="bi bi-percent fa-fw"></i>
				<span class="mb-0 nav-text">Offer</span> 
			</a>
		</li>

		<!-- Nav item Account -->
		<li class="nav-item"> 
			<a class="nav-link" href="account-profile.html"><i class="bi bi-person-circle fa-fw"></i>
				<span class="mb-0 nav-text">Account</span>
			</a>
		</li>
	</ul>
</div>
<!-- Navbar mobile END -->

<!-- Bootstrap JS -->
<script src=" {{ url('/public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src=" {{ url('/public/assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/glightbox/js/glightbox.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/choices/js/choices.min.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/stepper/js/bs-stepper.min.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/quill/js/quill.min.js') }}"></script>
<script src=" {{ url('/public/assets/vendor/dropzone/js/dropzone.js') }}"></script>

<!-- ThemeFunctions -->
<script src=" {{ url('/public/assets/js/functions.js') }}"></script>

</body>
</html>