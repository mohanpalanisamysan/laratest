@extends('admin.dashboard.layouts.app')

@section('content')

<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-4 pt-md-5 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-3 mb-2 accent">Edit User</h1>
				<div class="dz-message needsclick ">
					<i class="bi bi-person-fill display-6"></i>
				</div>
				<p class="mb-0"></p>
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
					<!-- Class Basic  Detail START -->
					<div class="card shadow p-4">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">User Approval Detail</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
                                
						<!-- Specific -->
						<div class="col-md-6">
							<label class="form-label">Approve *</label>
							<div class="d-sm-flex">
								<!-- Radio -->
								<div class="form-check radio-bg-light me-4">
									<input class="form-check-input" type="radio" name="user_status" value="Approved" id="flexRadioDefault1" checked="">
									<label class="form-check-label" for="flexRadioDefault1">
										Yes
									</label>
								</div>
								<!-- Radio -->
								<div class="form-check radio-bg-light me-4">
									<input class="form-check-input" type="radio" name="user_status" value="Not Approved" id="flexRadioDefault2">
									<label class="form-check-label" for="flexRadioDefault2">
										No
									</label>
								</div>
							</div>
						</div>									

								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
							</div>
						</div>
					</div>
					<!-- Class Basic Detail END -->

                    <!-- Button -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger btn-sm mb-0"><i class="bi bi-person-fill me-2"></i>Update User</button>
                        <a href="{{ url('/admin/dashboard/users/new-users-list') }}" class="btn btn-secondary btn-sm mb-0">Cancel</a>
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
@endsection