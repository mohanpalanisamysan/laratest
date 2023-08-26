@extends('admin.dashboard.layouts.app')

@section('content')

<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-4 pt-md-5 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-3 mb-2 accent">Add New School</h1>
				<div class="dz-message needsclick ">
					<i class="bi bi-mortarboard-fill display-6"></i>
				</div>
				<p class="mb-0">Praise effects wish change way and any wanted. Lively use looked latter regard had.</p>
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
                <form method="post" action="" class="vstack gap-4 ">
				{{ csrf_field() }}
					<!-- School Basic  Detail START -->
					<div class="card shadow p-xl-3">
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
									<input class="form-control" name="school_name" type="text" value="{{ old('school_name') }}" placeholder="Enter School Name">
									<div class="text-danger">{{ $errors->first('school_name') }}</div>
								</div>

								<!-- School Education System Type -->
								<div class="col-md-12">
									<label class="form-label">School Education System</label>
									<select class="form-select js-choice" name="school_educationsystem" data-search-enabled="true">
										<option value="">Select School Education System</option>
										<option>CBSC</option>
										<option>Matriculation</option>
									</select>
								</div>								

								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
							</div>
						</div>
					</div>
					<!-- School Basic Detail END -->

					<!-- Address Detail START -->
					<div class="card shadow p-xl-3">
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
									<input class="form-control" name="school_city" type="text" value="{{ old('school_city') }}" placeholder="Enter School City">
								</div>
								<!-- School District -->
								<div class="col-md-6">
									<label class="form-label">School District</label>
									<input class="form-control" name="school_district" type="text" value="{{ old('school_district') }}" placeholder="Enter School District">
								</div>
								<!-- School State -->
								<div class="col-md-6">
									<label class="form-label">School State</label>
									<input class="form-control" name="school_state" type="text" value="{{ old('school_state') }}" placeholder="Enter School State">
								</div>
								<!-- School Country -->
								<div class="col-md-6">
									<label class="form-label">School Country</label>
									<input class="form-control" name="school_country" type="text" value="{{ old('school_country') }}" placeholder="Enter School Country">
								</div>
								<!-- School Postal Code -->
								<div class="col-md-6">
									<label class="form-label">School Postal Code</label>
									<input class="form-control" name="school_postalcode" type="number" value="{{ old('school_postalcode') }}" placeholder="Enter School Postal Code">
								</div>
								<!-- School GMAP -->
								<div class="col-md-6">
									<label class="form-label">Google GMAP</label>
									<input class="form-control" name="school_gmap" type="text" value="{{ old('school_gmap') }}" placeholder="Enter School GMAP">
								</div>
								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Address</label>
									<textarea class="form-control" name="school_address" rows="3" placeholder="Enter School Address"></textarea>
								</div>

								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>

							</div>
						</div>
					</div>
					<!-- Event Venue Detail END -->
					
					
                    <!-- Button -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger mb-0"><i class="bi bi-plus-square-dotted me-2"></i>Add School</button>
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