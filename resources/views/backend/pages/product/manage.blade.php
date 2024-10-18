@extends('backend.layout.template')

@section('page-title')
	<title>Manage All Product | Ecommerce Platform</title>
@endsection

@section('page-css')
	<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
	<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('body-content')
	<div class="page-content">
		<div class="row">
			<div class="col-12 col-lg-12 col-xl-12 d-flex">
			  <div class="card radius-10 w-100">
				<div class="card-body">

				  @include('backend.includes.message')
					
				  <div class="d-flex align-items-center mb-3">
					<h5 class="mb-0">Manage All Product</h5>
					<a href="{{ route('product.trashManage') }}" class="btn btn-dark px-5 ms-auto">Trash Folder</a>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">

				  	@if( $products->count() ==  0)
				  		<div class="alert bg-warning">
				  			Oops! No data found in our database.
				  		</div>
				  	@else
				  		<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#SL.</th>
						      <th scope="col">Product Title</th>
						      <th scope="col">Brand</th>
						      <th scope="col">Category</th>
						      <th scope="col">Sub Category</th>
						      <th scope="col">SKU Code</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Regular Price</th>
						      <th scope="col">Offer Price</th>
						      <th scope="col">Featured</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@php $serial=1; @endphp
						  	@foreach( $products as $product )
						    <tr>
						      <th scope="row">{{ $serial }}</th>
						      <td>{{ $product->title }}</td>
						      <td>{{ $product->brand->name }}</td>
						      <td>{{ $product->category->name }}</td>
						      <td>{{ $product->subcat->name }}</td>
						      <td>{{ $product->sku_code }}</td>
						      <td>{{ $product->quantity }}</td>
						      <td>{{ $product->regular_price }} BDT</td>
						      <td>
						      	@if( !is_null($product->offer_price) )
						      		{{ $product->offer_price }} BDT
						      	@else
						      		-Not Applied-
						      	@endif
						      </td>
						      <td>
						      	@if( $product->is_featured==1 )
						      		<span class="badge bg-primary">Featured</span>
						      	@else
						      		<span class="badge bg-warning">Not Applied</span>
						      	@endif
						      </td>
						      <td>
						      	@if ( $product->status == 1 )
						      		<span class="badge bg-success">Active</span>
						      	@elseif ( $product->status == 2 )
						      		<span class="badge bg-danger">Inactive</span>
						      	@endif
						      </td>
						      <td>
						      	<ul class="action-bar">
						      		<li>
						      			<a href="{{ route('product.edit', $product->id) }}">
						      				<i class="lni lni-pencil-alt"></i>
						      			</a>
						      		</li>

						      		<li>
						      			<a href="" data-bs-toggle="modal" data-bs-target="#product{{ $product->id }}">
						      				<i class="lni lni-trash"></i>
						      			</a>
						      		</li>
						      	</ul>
						      </td>
						    </tr>
						    <!-- Modal -->
							<div class="modal fade" id="product{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h1 class="modal-title fs-5" id="exampleModalLabel">Move this Product to trash?</h1>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body text-center">
							        <div class="modal-action-btn">
							        	<ul>
							        		<li>
							        			<a href="{{ route('product.trash', $product->id) }}" class="btn btn-danger px-5">Yes</a>
							        		</li>
							        		<li>
							        			<button type="button" class="btn btn-dark px-5" data-bs-dismiss="modal">No</button>
							        		</li>
							        	</ul>
							        </div>
							      </div>
							    </div>
							  </div>
							</div>
						    @php $serial++; @endphp
						    @endforeach
						  </tbody>
						</table>
				  	@endif

				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection

@section('page-scripts')

@endsection