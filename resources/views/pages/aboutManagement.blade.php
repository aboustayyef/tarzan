@extends('layout.page')

@section('title')
	Management &amp; Board. Tarzan Enterprise Ltd.
@stop

@section('sidebar')
	<div class="card">
	  	<div class="card-image">
	    	<figure class="image">
				<img src="{{asset('img/sidebar/malek-kamel-hamoui.jpg')}}">
	    	</figure>
		</div>
		<div class="card-content">
			<div class="content">
				Executive Chairman Malek K. Hamoui
			</div>
		</div>
	</div>
@stop

@section('content')        
    <p>In Tarzan Enterprise ltd, we strongly believe in the importance of collective work. Tarzan would not have thrived if it weren't for the individual contributions of every member of its family. We are grateful for the efforts, dedication and goodwill they have contributed to the company.</p>

	<h2>Board of Directors</h2>
	<div class="columns">

		<div class="column is-one-third">
			<div class="management__name">Malek K. Hamoui</div>			
			<div class="management__title">Executive Chairman</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Zafer K. Hamoui</div>
			<div class="management__title">Managing Director</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Riad M. Hamoui</div>
			<div class="management__title">Senior Executive Director</div>
		</div>

	</div>

	<hr>

	<div class="columns">

		<div class="column is-one-third">
			<div class="management__name">Mustapha M. Hamoui</div>			
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">HR/Admin/ICT</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Ziad M. Hamoui</div>			
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">Operations, Transport</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Omar Z. Hamoui</div>
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">Operations, Logistics</div>
		</div>

	</div>

	<div class="columns">

		<div class="column is-one-third">
			<div class="management__name">Majdi R. Hamoui</div>			
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">Trade. Blue Gallery</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Hatem M. Hamoui</div>			
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">Trade. Blue Gallery</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Nabih Z. Hamoui</div>
			<div class="management__title">Executive Director</div>
			<div class="management__subtitle">Engineering. Fleet</div>
		</div>

	</div>

	<h2>Senior Management</h2>

	<div class="columns">

		<div class="column is-one-third">
			<div class="management__name">Walid M. Hamoui</div>			
			<div class="management__title">Workshop, Procurement</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">D. A. Gyimah</div>
			<div class="management__title">Secretary, Chief Accountant</div>
		</div>

		<div class="column is-one-third">
			<div class="management__name">Nicolas Mensah</div>
			<div class="management__title">Port Operations</div>
		</div>

	</div>
	<div class="columns">

		<div class="column is-one-third">
			<div class="management__name">Lawrence Asamoah</div>			
			<div class="management__title">Public Relations</div>
		</div>

	</div>

@stop