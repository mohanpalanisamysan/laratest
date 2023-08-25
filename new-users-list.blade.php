@extends('admin.dashboard.layouts.app')

@section('content')

<div class="page-content-wrapper p-xxl-4">
	
<section class="p-3">
	<div class="container-fluid">
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-2">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-3 mb-sm-0">Users List</h1>
						<div class="d-grid"><a href="{{ url('/admin/dashboard/class/class-add') }}" class="btn btn-primary mb-0">
							<i class="bi bi-person-plus-fill me-2"></i>Add User</a>
						</div>					
					</div>
				</div>
			</div>

			<div class="row g-4 my-2">
				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body shadow border p-4">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<!-- Number -->
							<div class="me-2">
								<span>Total Class</span>
								<h3 class="mb-0 mt-2">{{ $getRecordNewusers->total() }}</h3>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-primary bg-opacity-10 text-primary mb-0">
								<i class="bi bi-file-earmark-text-fill fa-fw"></i>
							</div>
						</div>
						<!-- Progress bar -->
						<div class="progress progress-xs bg-primary bg-opacity-10 mb-2">
							<div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
						<span><span class="text-primary">16 new rooms booked</span> today</span>
					</div>	
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body shadow border p-4">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<!-- Number -->
							<div class="me-2">
								<span>Active Colleges</span>
								<h3 class="mb-0 mt-2">12</h3>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-success bg-opacity-10 text-success mb-0">
								<i class="bi bi-check-square-fill fa-fw"></i>
							</div>
						</div>
						<!-- Progress bar -->
						<div class="progress progress-xs bg-success bg-opacity-10 mb-2">
							<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
						<span><span class="text-success">2 canceled rooms</span> today</span>
					</div>	
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body shadow border p-4">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<!-- Number -->
							<div class="me-2">
								<span>In-Active Colleges</span>
								<h3 class="mb-0 mt-2">20</h3>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-danger bg-opacity-10 text-danger mb-0">
								<i class="bi bi-x-square-fill fa-fw"></i>
							</div>
						</div>
						<!-- Progress bar -->
						<div class="progress progress-xs bg-danger bg-opacity-10 mb-2">
							<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
						<span><span class="text-danger">45 reservation</span> incoming</span>
					</div>	
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body shadow border p-4">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<!-- Number -->
							<div class="me-2">
								<span>Pending Approval</span>
								<h3 class="mb-0 mt-2">28</h3>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-orange bg-opacity-10 text-orange mb-0">
								<i class="bi bi-hourglass-bottom fa-fw"></i>
							</div>
						</div>
						<!-- Progress bar -->
						<div class="progress progress-xs bg-orange bg-opacity-10 mb-2">
							<div class="progress-bar bg-orange" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
							</div>
						</div>
						<span><span class="text-orange">30 reservation</span> outgoing</span>
					</div>	
				</div>
			</div>

			@include('_message')

	<div class="vstack gap-4 my-3">

	<!-- Personal info START -->
	<div class="card shadow">
	<!-- Card header -->
	<div class="card-header border-bottom">
		<h5 class="card-header-title">Search Users</h4>
	</div>

	<!-- Card body START -->
	<div class="card-body">
		<!-- Form START -->
		<form method="get" action="" class="row g-3">

			<!-- Class Name Search -->
			<div class="col-md-2">
				<input type="text" class="form-control" value="{{ Request::get('name') }}" name="name" placeholder="Enter User Name">
			</div>

			<!-- Class Name Search -->
			<div class="col-md-2">
				<input type="text" class="form-control" value="{{ Request::get('email') }}" name="email" placeholder="Enter User Email">
			</div>

			<!-- Class Name Search -->
			<div class="col-md-2">
				<input type="number" class="form-control" value="{{ Request::get('phone') }}" name="phone" placeholder="Enter User Phone">
			</div>

			<!-- Education System Search -->
			<div class="col-md-2">
				<input type="text" class="form-control" value="{{ Request::get('school') }}" name="school" placeholder="Enter School Name">
			</div>

			<!-- Education System Search -->
			<div class="col-md-2">
				<input type="text" class="form-control" value="{{ Request::get('class') }}" name="class" placeholder="Enter Class Name">
			</div>

			<!-- Education System Search -->
			<div class="col-md-2">
				<input type="text" class="form-control" value="{{ Request::get('user_type') }}" name="user_type" placeholder="Enter User Type">
			</div>

			<!-- Buttons -->
			<div class="col-md-2">
				<button class="btn btn-primary" type="submit" > Search </button>
				<a href="{{ url('/admin/dashboard/users/users-list') }}" class="btn btn-secondary">Clear</a>

		</form>
		<!-- Form END -->
	</div>
	<!-- Card body END -->
</div>
<!-- Personal info END -->

</div>					
								
<div class="card border shadow p-2">
<div class="card-body">
		<div class="row">
			<div class="col-12">
				<!-- Table START -->
				<div class="table-responsive-xl">
				
					<table class="table table-compare align-middle">
						<!-- Head START -->
							<thead class="align-middle">
								<tr>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">User Name</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">User Type</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">User Email</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">User Phone</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">School</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Class</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Status</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Is Delete</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Account Created Date</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->
											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Account Updated Date</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

									<th scope="col">
										<div class="card bg-transparent">
											<!-- Image -->

											<!-- Card body START -->
											<div class="card-body px-0">
												<!-- Title -->
												<span class="h6">Action</a></span>
												<!-- Button and price -->
												<div class="d-sm-flex justify-content-between align-items-center mt-2">
												</div>
											</div>
										</div>
									</th>

								</tr>
							</thead>
						<!-- Head END -->

						@foreach($getRecordNewusers as $value)
						<!-- Body START -->
						<tbody class="border-top-0">
							<!-- Item -->

							<!-- Item -->
							<tr>

								<td class="fw-bold text-dark"><a href="{{ url('/admin/dashboard/users/users-detail/'.$value->id) }}" class="link-dark" target="_blank">
									{{ $value->name}}</a></td>
								<td>{{ $value->user_type}}</td>
								<td>{{ $value->email}}</td>
								<td>{{ $value->phone}}</td>
								<td>{{ $value->school}}</td>
								<td>{{ $value->class}}</td>
								<td>{{ $value->user_status}}</td>
								<td>{{ $value->is_delete}}</td>
								<td>{{ $value->created_at}}</td>
								<td>{{ $value->updated_at}}</td>
								<td>
									<div class="mt-2 mt-md-0">
									<ul class="list-inline mb-0">
										<!-- Report -->
										<li class="list-inline-item">
											<a href="{{ url('/admin/dashboard/users/users-edit/'.$value->id) }}" class="btn btn-sm btn-light px-2 text-dark" target="_blank">
											<i class="bi bi-pencil-square fa-fw"></i></a>
											</li>
									<!-- wishlist -->
									<li class="list-inline-item">
										<a href="{{ url('/admin/dashboard/users/users-delete/'.$value->id) }}" class="btn btn-sm btn-light px-2 text-dark" target="_blank">
										<i class="fa-solid fa-fw fa-trash text-danger"></i></a>
									</li>
									</ul>
									</div>
								</td>
							</tr>

						</tbody>
						<!-- Body END -->
						@endforeach

					</table>

					<div class="">
						{!! $getRecordNewusers->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
					</div>

				</div>
				<!-- Table END -->
				
			</div>
		</div><!-- Row END -->
		</div><!-- Row END -->
		
	</div>  
	</div>

</section>

</div>

@endsection