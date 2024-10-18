@extends('backend.layout.template')

@section('page-title')
	<title>Add District | Ecommerce Platform</title>
@endsection

@section('page-css')

@endsection

@section('body-content')
	<div class="page-content">
		<div class="row">
			<div class="col-12 col-lg-12 col-xl-12 d-flex">
			  <div class="card radius-10 w-100">
				<div class="card-body">
				  <div class="d-flex align-items-center mb-3">
					<h5 class="mb-0">Add New District</h5>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">
				  	<form method="POST" action="{{ route('district.store') }}">
				  		@csrf

				  		<div class="mb-3">
				  			<label>District Name</label>
				  			<input type="text" name="name" class="form-control" required="required">
				  		</div>

				  		<div class="mb-3">
				  			<label>State Name</label>
				  			<select class="form-select" name="state_id" required="required">
				  				<option>Please select the State</option>
				  				@foreach( $states as $state )
				  					<option value="{{ $state->id }}">{{ $state->name }}</option>
				  				@endforeach
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<label>Active Status</label>
				  			<select class="form-select" name="status">
				  				<option>Please select status</option>
				  				<option value="1">Active</option>
				  				<option value="2">Inactive</option>
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<input type="submit" name="submit" value="Add State" class="btn btn-dark px-5">
				  		</div>
				  	</form>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection

@section('page-scripts')

@endsection