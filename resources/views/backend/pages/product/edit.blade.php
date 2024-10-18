@extends('backend.layout.template')

@section('page-title')
	<title>Update District | Ecommerce Platform</title>
@endsection

@section('page-css')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection

@section('body-content')
	<div class="page-content">

		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">eCommerce</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Update Product Information</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<button type="button" class="btn btn-primary">Settings</button>
				<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
					<a class="dropdown-item" href="javascript:;">Another action</a>
					<a class="dropdown-item" href="javascript:;">Something else here</a>
					<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
				</div>
			</div>
		</div>
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<form method="GET" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
				@csrf

				<div class="card-body p-4">
				  <h5 class="card-title">Update Product</h5>
				  <hr>
				  @include('backend.includes.message')

					<div class="form-body mt-4">
						<div class="row">
							<div class="col-lg-8">
								<div class="border border-3 p-4 rounded">

									<div class="mb-3">
										<label>Product Title</label>
										<input type="text" name="title" class="form-control"value="{{ $product->title }}" required="required">
									</div>

									<div class="mb-3">
										<label class="form-label">Short Description</label>
										<textarea class="form-control" rows="4" name="short_details">{{ $product->short_details }}</textarea>
									</div>

									<div class="mb-3">
										<label class="form-label">Long Description</label>
										<textarea class="form-control" rows="7" name="long_details">{{ $product->long_details }}</textarea>
									</div>

									<div class="mb-3">
										<label for="inputProductDescription" class="form-label">Product Images</label>
										<input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple="" style="display: none;"><div class="imageuploadify well"><div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i></div><div class="imageuploadify-images-list text-center"><i class="bx bxs-cloud-upload"></i><span class="imageuploadify-message">Drag&amp;Drop Your File(s)Here To Upload</span><button type="button" class="btn btn-default" style="background: white; color: rgb(58, 160, 255);">or select file to upload</button></div></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="border border-3 p-4 rounded">
									<div class="row g-3">

										<div class="col-md-12">
											<label class="form-label">Select Brand</label>
											<select class="form-select" name="brand_id">
											<option value="0">Please select the Brand Name</option>
											@foreach( $brands as $brand )
												<option value="{{ $brand->id }}"
														@if ( $product->brand_id == $brand->id )selected @endif
													>{{ $brand->name }}</option>

												

											@endforeach
											</select>
										</div>

										<div class="col-md-12">
											<label class="form-label">Select Parent Category</label>
											<select class="form-select" name="category_id" id="category_id">
											<option value="0">Please select the Category Name</option>
											@foreach( $categories as $category)
												<option value="{{ $category->id }}"
														@if ( $product->category_id == $category->id )selected @endif
													>{{ $category->name }}</option>
											@endforeach
											</select>
										</div>

										<div class="col-md-12">
											<label class="form-label">Select Child Category</label>
											<select class="form-select" name="subcat_id" id="subcat_id">
											<option value="0">Please select the child Category Name</option>
											@foreach( $subCats as $subCat)
												<option value="{{ $subCat->id }}"
													@if ( $product->subcat_id == $subCat->id )selected @endif
													>{{ $subCat->name }}</option>
											@endforeach
											</select>
										</div>

										<div class="col-md-6">
											<label class="form-label">Regular Price</label>
											<input type="number" class="form-control" name="regular_price" value="{{ $product->regular_price }}" placeholder="00.00">
										</div>

										<div class="col-md-6">
											<label class="form-label">Offer Price</label>
											<input type="number" class="form-control" name="offer_price" value="{{ $product->offer_price }}" placeholder="00.00">
										</div>

										<div class="col-md-6">
											<label class="form-label">SKU Code</label>
											<input type="text" class="form-control" name="sku_code" value="{{ $product->sku_code }}" placeholder="00.00">
										</div>

										<div class="col-md-6">
											<label class="form-label">Quantity</label>
											<input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Product Quantity">
										</div>

										<div class="col-md-12">
											<label class="form-label">Video Link</label>
											<input type="text" class="form-control" name="video_link" value="{{ $product->video_link }}">
										</div>

										<div class="col-12">
											<label class="form-label">Is Featured</label>
											<select class="form-select" name="is_featured">
											<option value="0">Please select the Featured status</option>
											<option value="1" @if( $product->is_featured == 1 ) selected @endif >Yes</option>
											<option value="0" @if( $product->is_featured == 0 ) selected @endif >No</option>
											</select>
										</div>

										<div class="col-12">
											<label class="form-label">Status</label>
											<select class="form-select" name="status">
											<option value="1">Please select status</option>
											<option value="1" @if( $product->is_featured == 1 ) selected @endif >Active</option>
											<option value="2" @if( $product->is_featured == 2 ) selected @endif >Inactive</option>
											</select>
										</div>

										<div class="col-12">
											<label class="form-label">Product Tags</label>
											<input type="text" class="form-control" placeholder="Enter Product Tags" name="tags" value="{{ $product->tags }}">
										</div>

										<div class="col-12">
											<div class="d-grid">
											<button type="submit" class="btn btn-primary">Update Product</button>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div><!--end row-->
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('page-scripts')
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type ="text/javascript">
	$("#category_id").change(function(){

		//Get the that category_id which we want to change
		var CategoryID = $("#category_id").val();

		//Initiate the dropdown field
		$("#subcat_id").html();

		var option = "";

		//Send the request to the route and get all the data if exist
		$.get("http://127.0.0.1:8000/get-subcat/" + CategoryID, function(data){
			data = JSON.parse(data);
			data.forEach( function( element ){
				option += "<option value='"+ element.id +"'>" + element.name + "</option>"
			});
			$("#subcat_id").html(option);
		});

	});

</script>
@endsection