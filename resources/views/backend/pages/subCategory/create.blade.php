@extends('backend.layout.template')

@section('page-title')
	<title>Add Sub Category | Ecommerce Platform</title>
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
					<h5 class="mb-0">Add New Sub Category</h5>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">
				  	<form method="POST" action="{{ route('subCategory.store') }}" enctype="multipart/form-data">
				  		@csrf

				  		<div class="mb-3">
				  			<label>Sub Category Name</label>
				  			<input type="text" name="name" class="form-control" required="required" placeholder="Category Name" value="{{ old('name') }}">
				  		</div>

				  		<div class="mb-3">
				  			<label>Parent Category</label>
				  			<select class="form-select" name="category_id">
				  				<option>Please select parent category</option>
				  				@foreach($parentCats as $parentCat)
				  					<option value="{{ $parentCat->id }}">{{ $parentCat->name }}</option>
				  				@endforeach
				  			</select>
				  		</div>

				  		<div class="mb-3">
				  			<label>Description</label>
				  			<textarea name="description" class="form-control" rows="4" placeholder="Write a description..." value="{{ old('description') }}"></textarea>
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
				  			<label>Sub Category Logo</label>
				  			<input type="file" name="image" class="form-control">
				  		</div>

				  		<div class="mb-3">
				  			<input type="submit" name="submit" value="Add Sub Category" class="btn btn-dark px-5">
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