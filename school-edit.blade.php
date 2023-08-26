@extends('admin.dashboard.layouts.app')

@section('content')

<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-4 pt-md-5 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-3 mb-2 accent">Edit School</h1>
				<div class="dz-message needsclick ">
					<i class="bi bi-mortarboard-fill display-6"></i>
				</div>
				<p class="mb-0">{{ $getRecordSchools->school_name }}</p>
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
					<!-- School Basic  Detail START -->
					<div class="card shadow p-4">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">School Basic Detail</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
                                
								<!-- School name -->
								<div class="col-md-12">
									<label class="form-label">School Name</label>
									<input class="form-control" name="school_name" type="text" value="{{ $getRecordSchools->school_name }}" placeholder="Enter School Name">
									<div class="text-danger">{{ $errors->first('school_name') }}</div>
								</div>

								<!-- School Education System -->
								<div class="col-md-12">
									<label class="form-label">Education System</label>
									<input class="form-control" name="school_educationsystem" value="{{ $getRecordSchools->school_educationsystem }}" type="text" placeholder="Enter School Education System">
								</div>


								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
							</div>
						</div>
					</div>
					<!-- School Basic Detail END -->


					<!-- Address Detail START -->
					<div class="card shadow p-4">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">School Address</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
                                
								<!-- School City -->
								<div class="col-md-6">
									<label class="form-label">School City</label>
									<input class="form-control" name="school_city" value="{{ $getRecordSchools->school_city }}" type="text" placeholder="Enter School City">
								</div>
								<!-- School District -->
								<div class="col-md-6">
									<label class="form-label">School District</label>
									<input class="form-control" name="school_district" value="{{ $getRecordSchools->school_district }}" type="text" placeholder="Enter School District">
								</div>
								<!-- School State -->
								<div class="col-md-6">
									<label class="form-label">School State</label>
									<input class="form-control" name="school_state" value="{{ $getRecordSchools->school_state }}" type="text" placeholder="Enter School State">
								</div>
								<!-- School Country -->
								<div class="col-md-6">
									<label class="form-label">School Country</label>
									<input class="form-control" name="school_country" value="{{ $getRecordSchools->school_country }}" type="text" placeholder="Enter School Country">
								</div>
								<!-- School Postal Code -->
								<div class="col-md-6">
									<label class="form-label">School Postal Code</label>
									<input class="form-control" name="school_postalcode" value="{{ $getRecordSchools->school_postalcode }}" type="number" placeholder="Enter School Postal Code">
								</div>
								<!-- School GMAP -->
								<div class="col-md-6">
									<label class="form-label">Google GMAP</label>
									<input class="form-control" name="school_gmap" value="{{ $getRecordSchools->school_gmap }}" type="text" placeholder="Enter School GMAP">
								</div>
								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Address</label>
									<textarea class="form-control" name="school_address" rows="2" placeholder="Enter School Address">{{ $getRecordSchools->school_address }}</textarea>
								</div>

								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>

							</div>
						</div>
					</div>
					<!-- School Address Detail END -->


                    <!-- Button -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger mb-0"><i class="bi bi-arrow-up-right-square me-2"></i>Update School</button>
                        <a href="{{ url('/admin/dashboard/schools/school-list') }}" class="btn btn-dark mb-0">Cancel</a>
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