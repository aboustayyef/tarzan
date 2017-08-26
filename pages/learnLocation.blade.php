@extends('layout.page')

@section('title')
	Location. Tarzan Enterprise Ltd.
@stop

@section('sidebar')
	<img src="{{asset('img/sidebar/brown-envelope.jpg')}}">
@stop

@section('content')        

@if(session('successMessage'))
	<div id="notification" class="notification">
	  <button id="removeNotification" class="delete"></button>
	  {{session('successMessage')}}
	</div>
@endif

<h2>Location</h2>
<p>Tarzan's main operational headquarter is at the intersection of Harbour Road and Aflao road near the Tema roundabout. Administration is in Accra at Mamleshie Avenue in Kanatamanto.</p>

<h3>Administration, Accra</h3>
<h4>Accra, Kantamanto Area, D 96/4, Mamleshie Road. P.O. Box 396</h4>
<img src="{{asset('img/map-kantamanto.png')}}" alt="Tarzan House in Accra">
<hr>
<h3>Main Operations, Tema</h3>
<h4>Tema Roundabout, Intersection of Harbour Road and Aflao Road</h4>
<img src="{{asset('img/map-tema.png')}}" alt="">
<hr>
<h3>Akasanoma Warehouses, Tema</h3>
<h4>Harbour Road, Near Rana Motors, Tema</h4>
<img src="{{asset('img/map-akasanoma.png')}}" alt="">
<hr>
<h3>Blue Gallery, Tema</h3>
<h4>Aflao Road, near Tema Roundabout, Opposite Shell station</h4>
<img src="{{asset('img/map-bluegallery.png')}}" alt="">


@stop