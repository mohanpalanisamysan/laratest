@extends('admin.dashboard.layouts.app')

@section('content')

<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-4 pt-md-5 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-3 mb-2 accent">Add New Class</h1>
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
					<!-- Class Basic  Detail START -->
					<div class="card shadow p-xl-3">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Class Basic Detail</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">

								<!-- School -->
								<div class="col-md-6">
									<label class="form-label">Select Your School</label>
									<select class="form-select js-choice" name="school_id" data-search-enabled="true">
										<option value="">Select School</option>
										@foreach($getRecordSchools as $school)
										<option value="{{ $school->id }}">{{ $school->school_name}}</option>
										@endforeach
									</select>
								</div>
															
								<!-- Class name -->
								<div class="col-md-6">
									<label class="form-label">Class Name</label>
									<input class="form-control" name="class_name" type="text" placeholder="Enter Class Name">
								</div>

								<p class="small mb-0 mt-3"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
							</div>
						</div>
					</div>
					<!-- Class Basic Detail END -->
					
                    <!-- Button -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger mb-0"><i class="bi bi-mortarboard-fill me-2"></i>Add Class</button>
                        <a href="{{ url('/admin/dashboard/class/class-list') }}" class="btn btn-dark mb-0">Cancel</a>
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