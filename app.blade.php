<!DOCTYPE html>
<html lang="en">
<head>
	<title>JrMajestic - Campus Hiring & Onboarding</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ url ('/public/assets/images/favicon.ico') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/apexcharts/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/flatpickr/css/flatpickr.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/vendor/dropzone/css/dropzone.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('/public/assets/css/custom-style.css') }}">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
	<!-- Sidebar START -->
    @include('admin.dashboard.layouts.sidebar')
	<!-- Sidebar END -->
	
	<!-- Page content START -->
	<div class="page-content">
	
		<!-- Top bar START -->
        @include('admin.dashboard.layouts.header') 
		<!-- Top bar END -->
	
		<!-- Page main content START -->
        @yield('content')
		<!-- Page main content END -->

	</div>
	<!-- Page content END -->
	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
<script src="{{ url ('/public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendor -->
<script src="{{ url ('/public/assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
<script src="{{ url ('/public/assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
<script src="{{ url ('/public/assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ url ('/public/assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src="{{ url ('/public/assets/vendor/dropzone/js/dropzone.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ url ('/public/assets/js/functions.js') }}"></script>

</body>
</html>