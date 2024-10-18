@extends('backend.layout.template')

@section('page-title')
	<title>Manage All Country | Ecommerce Platform</title>
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
				  <div class="d-flex align-items-center mb-3">
					<h5 class="mb-0">Manage All Country</h5>
					<a href="{{ route('country.trashManage') }}" class="btn btn-dark px-5 ms-auto">Trash Folder</a>
				  </div>

				  <div class="flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">

				  	@if( $countries->count() ==  0)
				  		<div class="alert bg-warning">
				  			Oops! No data found in our database.
				  		</div>
				  	@else
				  		<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#SL.</th>
						      <th scope="col">Country Name</th>
						      <th scope="col">Slug URL</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@php $serial=1; @endphp
						  	@foreach( $countries as $country )
						    <tr>
						      <th scope="row">{{ $serial }}</th>
						      <td>{{ $country->name }}</td>
						      <td>{{ $country->slug }}</td>
						      <td>
						      	@if ( $country->status == 1 )
						      		<span class="badge bg-success">Active</span>
						      	@elseif ( $country->status == 2 )
						      		<span class="badge bg-danger">Inactive</span>
						      	@endif
						      </td>
						      <td>
						      	<ul class="action-bar">
						      		<li>
						      			<a href="{{ route('country.edit', $country->id) }}">
						      				<i class="lni lni-pencil-alt"></i>
						      			</a>
						      		</li>

						      		<li>
						      			<a href="" data-bs-toggle="modal" data-bs-target="#country{{ $country->id }}">
						      				<i class="lni lni-trash"></i>
						      			</a>
						      		</li>
						      	</ul>
						      </td>
						    </tr>
						    <!-- Modal -->
							<div class="modal fade" id="country{{ $country->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h1 class="modal-title fs-5" id="exampleModalLabel">Move this Country to trash?</h1>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body text-center">
							        <div class="modal-action-btn">
							        	<ul>
							        		<li>
							        			<a href="{{ route('country.trash', $country->id) }}" class="btn btn-danger px-5">Yes</a>
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