<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	@yield('extracss')
</head>
<body>
	@include('layout.partials.header')
	<content>
		<div class="section">
			<div class="container">
				<div class="columns">
					
					{{-- Sidebar --}}
					<div class="column is-4">
						@yield('sidebar')
					</div>
				
					{{-- Main Content --}}
					<div id="content" class="column is-8">
						@yield('content')
					</div>
				</div>
			</div>
			
		</div>
	</content>
	@include('layout.partials.footer')
	

	<script src="js/app.js"></script>
</body>
</html>