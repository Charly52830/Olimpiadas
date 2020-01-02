<!DOCTYPE html>
<html lang = "es">
<head>
	@include('includes.head')
	@yield('title')
</head>
<body>
	@include('includes.header')
		<!-- Start content section -->
		@yield('content')
		<!-- Finish content section -->
	
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>