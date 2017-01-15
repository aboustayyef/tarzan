<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tarzan Enterprise Ltd. is a private limited liability company whose main operational branch is located in Tema, Ghana"
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