@extends('layout.page')

@section('title')
	Commerical Stores. Tarzan Enterprise Ltd.
@stop

@section('sidebar')
	<img src="{{asset('img/sidebar/tenants.jpg')}}">
@stop

@section('content')        
	<h2>Commercial Stores</h2>
    
    <p>Our building in kantamanto is strategically located in the heart of Accra's commercial zone. Because of our good location and ample parking space, our tenants include many of Ghana's most reputed banks (see left sidebar for list)</p>

	<p><img src ="{{asset('img/ktmnto-collage.jpg')}}"></p>

	<hr>	
	<h3 class="title is-3">Find Us</h3>

	<div style="background-color:#ececec;height:0;position:relative; padding-bottom:56.25%;overflow:hidden; margin-bottom:1em">
		
		<iframe style="position:absolute;top:0;left:0;width:100%; height:100%" allowfullscreen src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mamleshie+Road,+Accra,+Greater+Accra,+Ghana&amp;aq=0&amp;oq=mamleshie+&amp;sll=7.900284,-1.024801&amp;sspn=17.474773,33.33252&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Mamleshie+Rd,+Ashiedu+Keteke,+Accra,+Accra+Metropolis,+Greater+Accra,+Ghana&amp;ll=5.560461,-0.216894&amp;spn=0.029899,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

	</div>



@stop