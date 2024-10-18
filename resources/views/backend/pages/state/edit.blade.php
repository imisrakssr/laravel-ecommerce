@extends('backend.layout.template')

@section('page-title')
	<title>Update State | Ecommerce Platform</title>
@endsection

@section('page-css')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection

@section('body-content')
	<div class="page-content">
		<div class="row">
			<div class="col-6 col-lg-6 col-xl-6 offset-3 d-flex">
			  <div class="card radius-10 w-100">
				<div class="card-body">
				  <div class="d-flex align-items-center mb-3">
					<h5 class="mb-0">Update State Information</h5>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">
				  	<form method="GET" action="{{ route('state.update', $state->id) }}">
				  		@csrf

				  		<div class="mb-3">
				  			<label>State Name</label>
				  			<input type="text" name="name" value="{{ $state->name }}" class="form-control" required="required">
				  		</div>

				  		<div class="mb-3">
				  			<label>Country Name</label>
				  			<select class="form-select select2" name="country_id" required="required">
				  				<option>Please select the Country</option>
				  				@foreach( $countries as $country )
				  					<option value="{{ $country->id }}"

				  							@if ($country->id == $state->country_id)
				  								selected
				  							@endif

				  					>{{ $country->name }}</option>
				  				@endforeach
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<label>Priority Number</label>
				  				<input type="number" name="priority_number" class="form-control" value="{{ $state->priority_number }}" required="required">
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<label>Active Status</label>
				  			<select class="form-select" name="status">
				  				<option>Please select status</option>
				  				<option value="1" @if ( $state->status == 1 ) selected @endif >Active</option>
				  				<option value="2" @if ( $state->status == 2 ) selected @endif >Inactive</option>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".select2").select2();
		});
	</script>
@endsection