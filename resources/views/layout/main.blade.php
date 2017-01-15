<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@yield('extracss')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	@include('layout.partials.header')
	<content>
		@yield('content')
	</content>
	@include('layout.partials.footer')
	

	<script src="js/app.js"></script>
</body>
</html>