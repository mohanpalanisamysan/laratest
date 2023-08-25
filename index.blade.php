@extends('home.layouts.app')

@section('content')

<div class="page-content-wrapper p-xxl-4">

<!-- =======================
Main Banner START -->
<section class="pt-0">
	<div class="container position-relative">
		<!-- Bg image -->
		<div class="rounded-3 p-4 p-sm-5" style="background-image: url({{ url('/public/assets/images/bg/02.jpg') }}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
			<!-- Banner title -->
			<div class="row justify-content-between pt-0 pb-5"> 
				<div class="col-md-7 col-lg-8 col-xxl-7 pb-5 mb-0 mb-lg-5"> 
					<h1 class="text-white">Hey Buddy, Sign up to explore more on skill development</h1>
					<p class="text-white mb-0">Planning for a trip? we will organize your best trip with the best destination and within the best budgets!</p>
				</div>

				<!-- Produce item START -->
				<div class="col-md-5 col-lg-4 col-xl-3 mb-3 mb-sm-0">
					<div class="card shadow p-2 pb-0">
						<!-- Offer badge -->
						<div class="position-absolute top-0 start-0 mt-n3 ms-n3 z-index-9">
							<img src="{{ url('/public/assets/images/element/05.svg') }}" class="position-relative h-70px" alt="">
							<span class="h5 text-white position-absolute top-50 start-50 translate-middle">40%</span>
						</div>

						<div class="rounded-3 overflow-hidden position-relative">
							<!-- Image -->
							<img src="{{ url('/public/assets/images/category/tour/05.jpg') }}" class="card-img" alt="">
							<!-- Overlay -->
							<div class="bg-overlay bg-dark opacity-4"></div>
							
							<!-- Hover element -->
							<div class="card-img-overlay d-flex">
								<h6 class="text-white fw-normal mt-auto mb-0">5 Days / 4 Nights</h6>
							</div>
						</div>
						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Badge and Rating -->
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="#" class="badge bg-primary bg-opacity-10 text-primary">Adventure</a>
								<!-- Rating -->
								<h6 class="fw-light m-0"><i class="fa-solid fa-star text-warning me-2"></i>4.5</h6>
							</div>

							<!-- Title -->
							<h6 class="card-title"><a href="#">Maldives Sightseeing & Adventure Tour</a></h6>
							
							<!-- Badge and Price -->
							<div class="d-flex justify-content-between align-items-center mb-0">
								<!-- Price -->
								<h6 class="text-success mb-0">$385 <span class="fw-light">/person</span></h6>
								<span class="text-decoration-line-through mb-0 text-reset">$682</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Produce item END -->
			</div>
		</div>


	</div>
</section>
<!-- =======================
Main Banner END -->
<!-- =======================
Steps START -->
<section class="pb-0 py-0 mb-4">
	<div class="container">
		<div class="row g-4 g-lg-5 justify-content-center">
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center position-relative">
		
				<div class="px-4">
					<!-- Image -->
					<img src="{{ url('/public/assets/images/element/step-3.svg') }}" class="h-70px mb-3" alt="">
					<!-- Title -->
					<h6>Search Choice</h6>
					<p class="mb-0">Total 630+ destinations that we work with</p>
				</div>	
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 position-relative text-center pt-0 pt-lg-5">
				<!-- SVG decoration -->

		
				<div class="px-4">
					<!-- Image -->
					<img src="{{ url('/public/assets/images/element/step-2.svg') }}" class="h-70px mb-3" alt="">

					<!-- Title -->
					<h6>Select Destination</h6>
					<p class="mb-0">Insipidity the sufficient discretion imprudence</p>
				</div>
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center">
				<div class="px-4">
					<!-- Image -->
					<img src="{{ url('/public/assets/images/element/step-1.svg') }}" class="h-70px mb-3" alt="">

					<!-- Title -->
					<h6>Easy to Book</h6>
					<p class="mb-0">With an easy and fast ticket purchase process</p>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Steps END -->


<!-- =======================
Action box START -->
<section class="pb-0 py-0 mb-4">
	<div class="container position-relative">
		<div class="bg-primary-subtle rounded-3 position-relative p-4 p-sm-5">

			<!-- Svg decoration -->
			<figure class="position-absolute top-50 start-50 d-none d-lg-block mt-n4 ms-9">
				<svg class="fill-primary" width="138px" height="33px">
					<path	d="M105.158,32.490 L107.645,20.515 L101.600,21.873 L108.218,14.263 L110.496,2.974 L137.327,32.728 L105.158,32.490 ZM97.722,13.092 C96.678,12.477 95.604,11.881 94.529,11.319 L94.235,11.166 L94.543,10.576 L94.837,10.730 C95.922,11.296 97.006,11.898 98.060,12.519 L98.346,12.687 L98.009,13.260 L97.722,13.092 ZM91.250,9.714 C90.131,9.202 89.001,8.723 87.890,8.290 L87.581,8.170 L87.822,7.550 L88.132,7.671 C89.254,8.108 90.396,8.592 91.527,9.109 L91.829,9.247 L91.553,9.852 L91.250,9.714 ZM84.453,7.073 C83.279,6.699 82.117,6.374 80.943,6.092 L80.620,6.014 L80.776,5.368 L81.099,5.445 C82.287,5.730 83.465,6.060 84.655,6.439 L84.971,6.539 L84.770,7.173 L84.453,7.073 ZM77.372,5.388 C76.150,5.201 74.933,5.073 73.757,5.007 L73.425,4.988 L73.462,4.324 L73.794,4.343 C74.992,4.409 76.230,4.540 77.473,4.730 L77.802,4.781 L77.701,5.438 L77.372,5.388 ZM66.526,5.421 L66.199,5.480 L66.080,4.826 L66.407,4.766 C67.599,4.550 68.838,4.405 70.090,4.336 L70.422,4.318 L70.458,4.982 L70.126,5.000 C68.902,5.068 67.690,5.209 66.526,5.421 ZM59.574,7.498 L59.267,7.625 L59.014,7.010 L59.321,6.883 C60.448,6.418 61.621,6.003 62.809,5.646 L63.128,5.551 L63.318,6.188 L63.000,6.283 C61.833,6.633 60.681,7.042 59.574,7.498 ZM59.311,8.479 C60.126,9.473 60.795,10.540 61.300,11.649 L61.438,11.952 L60.833,12.228 L60.695,11.925 C60.214,10.868 59.575,9.851 58.797,8.901 L58.586,8.644 L59.100,8.222 L59.311,8.479 ZM54.714,31.225 L54.415,31.370 L54.126,30.771 L54.425,30.626 C55.435,30.137 56.398,29.436 57.287,28.542 L57.522,28.306 L57.993,28.775 L57.759,29.011 C56.816,29.959 55.792,30.703 54.714,31.225 ZM56.229,6.392 C55.322,5.672 54.309,5.004 53.218,4.408 L52.926,4.248 L53.245,3.665 L53.537,3.824 C54.662,4.439 55.706,5.128 56.643,5.871 L56.903,6.078 L56.489,6.599 L56.229,6.392 ZM56.268,8.312 L56.584,8.897 L56.292,9.055 C55.219,9.636 54.178,10.276 53.199,10.957 L52.926,11.147 L52.546,10.601 L52.819,10.411 C53.819,9.715 54.881,9.063 55.976,8.470 L56.268,8.312 ZM51.033,32.098 C50.331,32.098 49.622,32.004 48.925,31.819 C48.925,31.819 48.924,31.819 48.923,31.818 C48.397,31.678 47.868,31.483 47.351,31.238 L47.051,31.096 L47.336,30.495 L47.636,30.637 C48.117,30.865 48.608,31.046 49.095,31.176 C49.096,31.176 49.096,31.176 49.097,31.176 C49.737,31.347 50.389,31.433 51.034,31.433 L51.366,31.433 L51.366,32.098 L51.033,32.098 ZM47.808,15.784 L47.592,16.037 L47.087,15.605 L47.303,15.352 C48.086,14.437 48.962,13.546 49.905,12.704 L50.154,12.483 L50.596,12.979 L50.348,13.200 C49.426,14.022 48.572,14.892 47.808,15.784 ZM49.926,2.908 C48.822,2.493 47.656,2.136 46.459,1.846 L46.136,1.768 L46.293,1.121 L46.616,1.200 C47.836,1.495 49.031,1.861 50.160,2.285 L50.471,2.402 L50.237,3.024 L49.926,2.908 ZM44.153,21.953 L44.048,22.268 L43.418,22.058 L43.523,21.742 C43.892,20.634 44.428,19.496 45.115,18.362 L45.287,18.077 L45.856,18.421 L45.683,18.706 C45.022,19.798 44.507,20.891 44.153,21.953 ZM42.888,1.188 C41.701,1.034 40.482,0.940 39.265,0.907 L38.933,0.898 L38.951,0.233 L39.283,0.242 C40.523,0.275 41.764,0.372 42.974,0.528 L43.303,0.571 L43.218,1.230 L42.888,1.188 ZM32.021,1.426 L31.694,1.482 L31.582,0.827 L31.910,0.770 C33.121,0.564 34.357,0.414 35.583,0.326 L35.915,0.302 L35.962,0.965 L35.630,0.989 C34.426,1.076 33.212,1.223 32.021,1.426 ZM25.072,3.458 L24.766,3.588 L24.506,2.976 L24.812,2.845 C25.949,2.362 27.122,1.942 28.300,1.598 L28.619,1.505 L28.805,2.143 L28.485,2.237 C27.333,2.573 26.185,2.984 25.072,3.458 ZM18.761,7.025 L18.490,7.219 L18.103,6.679 L18.374,6.485 C19.387,5.759 20.435,5.087 21.492,4.488 L21.781,4.324 L22.108,4.902 L21.819,5.067 C20.783,5.654 19.754,6.313 18.761,7.025 ZM13.280,11.802 L13.050,12.042 L12.570,11.581 L12.801,11.341 C13.668,10.439 14.568,9.579 15.475,8.786 L15.725,8.567 L16.163,9.067 L15.913,9.286 C15.020,10.067 14.134,10.913 13.280,11.802 ZM8.648,17.428 L8.455,17.699 L7.914,17.314 L8.106,17.043 C8.831,16.023 9.585,15.035 10.349,14.106 L10.560,13.849 L11.073,14.271 L10.862,14.528 C10.109,15.445 9.364,16.420 8.648,17.428 ZM4.796,23.630 L4.637,23.922 L4.053,23.605 L4.212,23.313 C4.803,22.223 5.426,21.149 6.064,20.120 L6.240,19.837 L6.805,20.187 L6.629,20.470 C5.998,21.488 5.381,22.551 4.796,23.630 ZM1.658,30.231 L1.532,30.539 L0.917,30.286 L1.044,29.979 C1.508,28.850 2.011,27.714 2.539,26.603 L2.682,26.303 L3.282,26.588 L3.140,26.888 C2.617,27.989 2.118,29.113 1.658,30.231 ZM43.602,25.437 C43.661,26.716 44.055,27.783 44.772,28.607 L44.990,28.858 L44.488,29.295 L44.270,29.044 C43.452,28.104 43.004,26.901 42.937,25.468 L42.922,25.136 L43.586,25.104 L43.602,25.437 ZM60.942,22.425 L61.047,22.110 L61.678,22.319 L61.573,22.634 C61.175,23.834 60.657,24.979 60.033,26.037 L59.864,26.323 L59.291,25.986 L59.461,25.699 C60.061,24.681 60.559,23.580 60.942,22.425 ZM61.816,17.509 C61.836,16.777 61.795,16.048 61.694,15.341 L61.648,15.012 L62.306,14.918 L62.353,15.247 C62.458,15.991 62.502,16.758 62.480,17.527 C62.467,18.008 62.433,18.500 62.378,18.989 L62.341,19.319 L61.680,19.246 L61.717,18.915 C61.770,18.445 61.803,17.972 61.816,17.509 Z"/>
				</svg>
			</figure>

			<div class="row align-items-center position-relative">
				<div class="col-lg-8">
					<!-- Title -->
					<div class="d-flex">
						<h5>It's time to Make your Children Smarter</h5>
						<img src="{{ url('/public/assets/images/element/04.svg') }}" class="h-40px ms-3" alt="">
					</div>
					<p class="mb-3 mb-lg-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy.</p>
				</div>
				<!-- Content and input -->
				<div class="col-lg-4 text-lg-end">
					<a href="flight-list.html" class="btn btn-sm btn-primary mb-0">Book Now</a>
				</div>
			</div> <!-- Row END -->
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Experience START -->
<section class="pb-0 py-0 mb-4">
	<div class="container px-lg-5">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h4>Our Exciting Experience</h4>
			</div>
		</div>

		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
			<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/01.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Spa & Wellness</a></h5>
									<p class="text-white mb-2 small">We focus a great deal on the understanding of behavioral psychology and influence</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/02.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Wedding & Romance</a></h5>
									<p class="text-white mb-2 small">Understand that theory alone isn't going to get the job done.</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/03.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Activities</a></h5>
									<p class="text-white mb-2 small">Tolerably behavior may admit daughters offending effect wishes change way and any wanted.</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/04.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Event Calendar</a></h5>
									<p class="text-white mb-2 small">Praise effect wishes change way and any wanted behavioral psychology and influence</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/05.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Dining</a></h5>
									<p class="text-white mb-2 small">Focus a great deal on the understanding of behavioral psychology and influence</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/06.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Fitness Center</a></h5>
									<p class="text-white mb-2 small">Praise effect wishes change way and any wanted.</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="{{ url('/public/assets/images/category/hotel/resort/3by4/07.jpg') }}" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h5><a href="#" class="text-white stretched-link">Shop</a></h5>
									<p class="text-white mb-2 small">Do he it part more last in. We understand that theory is important</p>
									<button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
			</div>	
		</div>
	</div>
</section>
<!-- =======================
Experience END -->


<!-- =======================
Action box START -->
<section class="pb-0 py-0 mb-4">
	<div class="container position-relative">
		<!-- SVG decoration -->
		<figure class="position-absolute top-100 start-0 translate-middle d-none d-md-block z-index-1 mt-n4 ms-4">
			<svg class="fill-primary" width="148px" height="133px">
				<path d="M145.013,6.751 C143.905,6.733 143.022,5.819 143.041,4.712 C143.060,3.604 143.973,2.721 145.080,2.740 C146.188,2.759 147.071,3.672 147.052,4.779 C147.033,5.887 146.121,6.770 145.013,6.751 ZM144.552,34.160 C145.660,34.179 146.543,35.092 146.524,36.199 C146.506,37.307 145.592,38.190 144.485,38.171 C143.377,38.153 142.495,37.240 142.513,36.132 C142.532,35.024 143.445,34.141 144.552,34.160 ZM144.024,65.580 C145.132,65.599 146.015,66.512 145.996,67.619 C145.978,68.727 145.065,69.610 143.957,69.591 C142.849,69.572 141.966,68.659 141.985,67.552 C142.004,66.444 142.917,65.561 144.024,65.580 ZM143.496,97.000 C144.604,97.019 145.487,97.932 145.468,99.039 C145.450,100.147 144.537,101.030 143.429,101.011 C142.321,100.992 141.438,100.079 141.457,98.972 C141.476,97.864 142.389,96.981 143.496,97.000 ZM142.968,128.420 C144.076,128.439 144.959,129.351 144.940,130.460 C144.921,131.567 144.008,132.450 142.901,132.431 C141.793,132.413 140.910,131.500 140.929,130.392 C140.948,129.284 141.861,128.401 142.968,128.420 ZM116.936,6.279 C115.828,6.261 114.945,5.348 114.964,4.240 C114.982,3.132 115.895,2.250 117.003,2.268 C118.111,2.287 118.993,3.200 118.975,4.308 C118.956,5.415 118.043,6.298 116.936,6.279 ZM116.475,33.688 C117.582,33.707 118.465,34.620 118.447,35.727 C118.428,36.835 117.515,37.718 116.407,37.699 C115.300,37.681 114.417,36.768 114.436,35.660 C114.454,34.552 115.367,33.670 116.475,33.688 ZM115.947,65.108 C117.055,65.127 117.937,66.040 117.919,67.147 C117.900,68.255 116.987,69.138 115.880,69.119 C114.772,69.101 113.889,68.188 113.908,67.080 C113.926,65.973 114.839,65.090 115.947,65.108 ZM115.419,96.528 C116.527,96.547 117.409,97.460 117.391,98.567 C117.372,99.675 116.459,100.558 115.352,100.539 C114.244,100.521 113.361,99.608 113.380,98.500 C113.398,97.392 114.311,96.510 115.419,96.528 ZM114.891,127.948 C115.998,127.967 116.881,128.880 116.863,129.987 C116.844,131.095 115.931,131.978 114.823,131.959 C113.716,131.941 112.833,131.028 112.852,129.920 C112.870,128.812 113.783,127.930 114.891,127.948 ZM88.858,5.807 C87.750,5.789 86.868,4.876 86.886,3.768 C86.905,2.660 87.818,1.777 88.925,1.796 C90.033,1.815 90.916,2.728 90.897,3.835 C90.879,4.943 89.966,5.826 88.858,5.807 ZM88.397,33.216 C89.505,33.235 90.388,34.148 90.369,35.256 C90.351,36.363 89.438,37.246 88.330,37.227 C87.222,37.209 86.340,36.296 86.358,35.188 C86.377,34.081 87.290,33.198 88.397,33.216 ZM87.869,64.636 C88.977,64.655 89.860,65.568 89.841,66.676 C89.823,67.783 88.910,68.666 87.802,68.648 C86.694,68.629 85.812,67.716 85.830,66.608 C85.849,65.501 86.762,64.618 87.869,64.636 ZM87.341,96.056 C88.449,96.075 89.332,96.988 89.313,98.095 C89.295,99.203 88.382,100.086 87.274,100.067 C86.166,100.049 85.284,99.136 85.302,98.028 C85.321,96.921 86.234,96.038 87.341,96.056 ZM86.813,127.476 C87.921,127.495 88.804,128.408 88.785,129.516 C88.767,130.623 87.854,131.506 86.746,131.488 C85.638,131.469 84.756,130.556 84.774,129.448 C84.793,128.341 85.706,127.458 86.813,127.476 ZM60.781,5.336 C59.673,5.317 58.790,4.404 58.809,3.296 C58.827,2.189 59.740,1.306 60.848,1.324 C61.956,1.343 62.838,2.256 62.820,3.364 C62.801,4.471 61.888,5.354 60.781,5.336 ZM60.320,32.745 C61.428,32.763 62.310,33.676 62.292,34.784 C62.273,35.891 61.360,36.774 60.253,36.756 C59.145,36.737 58.262,35.824 58.281,34.717 C58.299,33.609 59.213,32.726 60.320,32.745 ZM59.792,64.165 C60.900,64.183 61.783,65.096 61.764,66.204 C61.745,67.311 60.832,68.194 59.725,68.175 C58.617,68.157 57.734,67.244 57.753,66.136 C57.771,65.029 58.684,64.146 59.792,64.165 ZM59.264,95.584 C60.372,95.603 61.255,96.516 61.236,97.624 C61.217,98.731 60.304,99.614 59.197,99.596 C58.089,99.577 57.206,98.664 57.225,97.556 C57.243,96.449 58.156,95.566 59.264,95.584 ZM58.736,127.005 C59.843,127.023 60.726,127.936 60.708,129.044 C60.689,130.151 59.776,131.034 58.669,131.016 C57.561,130.997 56.678,130.084 56.697,128.977 C56.715,127.869 57.628,126.986 58.736,127.005 ZM32.703,4.864 C31.595,4.845 30.713,3.932 30.731,2.825 C30.750,1.717 31.663,0.834 32.771,0.853 C33.878,0.871 34.761,1.784 34.742,2.892 C34.724,4.000 33.811,4.882 32.703,4.864 ZM32.243,32.273 C33.350,32.291 34.233,33.205 34.214,34.312 C34.196,35.420 33.283,36.303 32.175,36.284 C31.068,36.265 30.185,35.352 30.203,34.245 C30.222,33.137 31.135,32.254 32.243,32.273 ZM31.715,63.693 C32.822,63.712 33.705,64.624 33.686,65.732 C33.668,66.839 32.755,67.722 31.647,67.704 C30.539,67.685 29.657,66.772 29.675,65.665 C29.694,64.557 30.607,63.674 31.715,63.693 ZM31.187,95.113 C32.294,95.131 33.177,96.044 33.158,97.152 C33.140,98.260 32.227,99.142 31.119,99.124 C30.011,99.105 29.129,98.192 29.147,97.084 C29.166,95.977 30.079,95.094 31.187,95.113 ZM30.659,126.533 C31.766,126.551 32.649,127.465 32.630,128.572 C32.612,129.680 31.699,130.563 30.591,130.544 C29.484,130.525 28.601,129.612 28.619,128.505 C28.638,127.397 29.551,126.514 30.659,126.533 ZM4.626,4.392 C3.518,4.373 2.635,3.460 2.654,2.353 C2.672,1.245 3.585,0.362 4.693,0.381 C5.801,0.399 6.684,1.313 6.665,2.420 C6.646,3.528 5.733,4.411 4.626,4.392 ZM4.165,31.801 C5.273,31.820 6.156,32.732 6.137,33.840 C6.118,34.948 5.205,35.831 4.098,35.812 C2.990,35.793 2.107,34.880 2.126,33.773 C2.145,32.665 3.058,31.782 4.165,31.801 ZM3.637,63.221 C4.745,63.239 5.628,64.152 5.609,65.260 C5.590,66.368 4.677,67.251 3.570,67.232 C2.462,67.213 1.579,66.300 1.598,65.193 C1.616,64.085 2.529,63.202 3.637,63.221 ZM3.109,94.641 C4.217,94.659 5.100,95.573 5.081,96.680 C5.062,97.788 4.149,98.671 3.042,98.652 C1.934,98.633 1.051,97.720 1.070,96.613 C1.089,95.505 2.001,94.622 3.109,94.641 ZM2.581,126.061 C3.689,126.080 4.572,126.992 4.553,128.100 C4.534,129.208 3.621,130.091 2.514,130.072 C1.406,130.053 0.523,129.140 0.542,128.033 C0.561,126.925 1.474,126.042 2.581,126.061 Z"/>
			</svg>
		</figure>
		
		<div class="bg-light rounded-3 position-relative p-3 p-sm-4">

			<!-- Svg decoration -->
			<figure class="position-absolute top-0 end-0 mt-6 d-none d-sm-block">
				<svg class="fill-primary" width="141px" height="23.9px" viewBox="0 0 141 23.9" >
					<polygon points="1.8,14.1 21.5,23.9 41.4,14 61.3,23.9 81.2,14 101.1,23.9 121,14 139,23 139,20.2 121,11.2 101.1,21.1 81.2,11.2 61.3,21.1 41.4,11.2 21.5,21.1 1.8,11.4 "/>
					<polygon points="1.8,2.9 21.5,12.7 41.4,2.8 61.3,12.7 81.2,2.8 101.1,12.7 121,2.8 139,11.7 139,9 121,0 101.1,9.9 81.2,0 61.3,9.9 41.4,0 21.5,9.9 1.8,0.1"/>
				</svg>
			</figure>

			<div class="row">
				<div class="col-md-7 mx-auto text-center py-5">
					<!-- Title -->
					<h4 class="mb-4">Subscribe And Get a Special Discount </h4>
					<p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced.</p>
					<!-- Form -->
					<form class="bg-body shadow rounded-2 p-2">
						<div class="input-group">
							<input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
							<button type="button" class="btn btn-dark rounded-2 mb-0">Subscribe!</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

</div>

@endsection