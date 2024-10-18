<!doctype html>
<html lang="en" class="semi-dark">

<head>
	@include('backend.includes.header')
	@include('backend.includes.css')
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

	@include('backend.includes.menu')
	@include('backend.includes.topbar')

		
		<!-- body content is here -->
	<div class="page-wrapper">
		@yield('body-content')
	</div>


	@include('backend.includes.footer')

	</div>
	<!--end wrapper-->


	@include('backend.includes.script')
</body>

</html>