<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tarzan Enterprise Ltd. is a private limited liability company whose main operational branch is located in Tema, Ghana">
	@yield('extracss')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="manifest" href="/manifest.json">
	<meta name="theme-color" content="#e83844">
</head>
<body>
		@include('layout.partials.header')
		<div id="app">
			<content>
					@yield('content')
			</content>
		</div>
		@include('layout.partials.footer')
	

	<script src="js/app.js"></script>
</body>
</html>