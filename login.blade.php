<!DOCTYPE html>
<html lang="en">
<head>
	<title>JrMajestic - Login</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ url ('/public/assets/images/favicon.ico') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/vendor/choices/css/choices.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('/public/assets/css/custom-style.css')}}">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>




<!-- =======================
Main Content START -->
<section class="vh-xxl-100">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode  shadow border border-2 rounded-4 overflow-hidden">
					<div class="row g-0">
						<!-- Vector Image -->

						<div class="card text-center">

						<div class="card-body">
						<!-- Information -->
						<div class="col-lg-12 order-1">
							<div class="p-3 p-sm-7">
								<!-- Logo -->
								<div class="text-center">
									<a href="{{ url('/')}}">
										<img class="h-50px mb-4" src="{{ url('/public/assets/images/logo-icon.svg')}}" alt="logo">
									</a>
								</div>
								<!-- Title -->
								<h1 class="mb-3 h4">Welcome to JrMajestic</h1>

								<!-- Form START -->
								<form action="{{ url('login')}}" method="post" class="mt-2 text-start">
                                    {{ csrf_field() }}
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">Enter email id</label>
										<input type="email" class="form-control" required name="email">
									</div>
									<!-- Password -->
									<div class="mb-3 position-relative">
										<label class="form-label">Enter password</label>
										<input class="form-control fakepassword" type="password" name="password" id="psw-input">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>
									</div>
									<!-- Remember me -->
									<div class="mb-3 d-sm-flex justify-content-between">
										<div>
											<input type="checkbox" class="form-check-input" id="remember" name="remember">
											<label class="form-check-label" for="remember">Remember me?</label>
										</div>
										<a href="{{ url('forgot-password')}}" class="fw-bold">Forgot password?</a>
									</div>
                                    @include('_message')
									<!-- Button -->
									<div><button type="submit" class="btn btn-lg btn-primary w-100 mt-2 mb-0 rounded-pill">Login</button></div>
									<p class="mb-3 mt-3 text-center"><small>By continuing, you agree to JrMajestic's <br>
									<span class="fw-bold text-dark">Terms of Service </span> and acknowledge you've read our <br>
									<span class="fw-bold text-dark">Privacy Policy</span>
									Notice at collection;</small></p>
									<!-- Copyright -->
								</form>
								<!-- Form END -->
							</div>		
						</div>
						</div>
						<div class="card-footer bg-light text-body-secondary">
						<p class="mb-2 mt-2 text-center">New here?<a href="{{ url('register')}}" class="fw-bold"> Create an account</a></p>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ url('public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/vendor/choices/js/choices.min.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ url('public/assets/js/functions.js') }}"></script>

</body>
</html>