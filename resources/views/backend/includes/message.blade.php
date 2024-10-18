@if ($errors->any())
	@foreach ($errors->all() as $error)
		<div class="alert bg-danger" style="color: #fff;">{{ $error }}</div>
	@endforeach

@endif