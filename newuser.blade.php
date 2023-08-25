@extends('home.layouts.app')

@section('content')

<div class="page-content-wrapper p-xxl-4">

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-4 pt-md-5 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
			<h3 class="fs-4 mb-2">Hey, {{ Auth::user()->name }}</h3>
			<p class="mb-4">New users to setup their profile in the first time ! Please complete yours </p>

				<h1 class="fs-2 mb-0">Profile Setup</h1>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Main content START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
			<form method="post" action="" class="vstack gap-4 g-4">
				{{ csrf_field() }}
					<!-- Owner Detail START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Owner Detail</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- State -->
								<div class="col-md-6">
									<label class="form-label">Select Your Role</label>
									<select class="form-select js-choice" name="user_type" data-search-enabled="true">
										<option value="">Select Role</option>
										<option value="SchoolStudent">School Student</option>
									</select>
								</div>
							</div>
                            <p class="small mb-0 mt-3"><b>Note:</b> Please choose your role</p>

						</div>
					</div>
					<!-- Owner Detail END -->

					<!-- Button -->
                    <!-- Button -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger mb-0"><i class="bi bi-ticket-perforated me-2"></i>Update</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn btn-dark mb-0">Cancel</a>
                    </div>

				</form>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

</div>

@endsection