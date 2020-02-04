<!DOCTYPE html>
<html lang = "es">
<head>
	@include('admin.includes.head')
	@yield('title')
</head>
<body>
	@include('admin.includes.header')
	<!-- Start content section -->
	@yield('content')
	<!-- Finish content section -->
	<footer>
		@include('admin.includes.footer')
	</footer>
</body>
</html>