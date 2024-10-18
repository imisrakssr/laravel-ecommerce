@extends('backend.layout.template')

@section('page-title')
	<title>Update Country | Ecommerce Platform</title>
@endsection

@section('page-css')

@endsection

@section('body-content')
	<div class="page-content">
		<div class="row">
			<div class="col-6 col-lg-6 col-xl-6 offset-3 d-flex">
			  <div class="card radius-10 w-100">
				<div class="card-body">
				  <div class="d-flex align-items-center mb-3">
					<h5 class="mb-0">Update Country Information</h5>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">
				  	<form method="GET" action="{{ route('country.update', $country->id) }}">
				  		@csrf

				  		<div class="mb-3">
				  			<label>Country Name</label>
				  			<input type="text" name="name" value="{{ $country->name }}" class="form-control" required="required">
				  		</div>

				  		<div class="mb-3">
				  			<label>Active Status</label>
				  			<select class="form-select" name="status">
				  				<option>Please select status</option>
				  				<option value="1" @if ( $country->status == 1 ) selected @endif >Active</option>
				  				<option value="2" @if ( $country->status == 2 ) selected @endif >Inactive</option>
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<input type="submit" name="submit" value="Save Changes" class="btn btn-dark px-5">
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