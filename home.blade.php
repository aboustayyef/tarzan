@extends('layout.main')

@section('title')Welcome To Tarzan Enterprise Ltd. Ghana @stop
@section('extracss')<link rel="stylesheet" href="{{asset('css/flickity.css')}}">@stop

@section('content')
	@include('layout.partials.slideshow')
	@include('layout.partials.services_and_news')
	@include('layout.partials.bluegallery')
@stop