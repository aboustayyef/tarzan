@extends('layout.page')

@section('title')
	Contact Us. Tarzan Enterprise Ltd.
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

<h2>Contact Us</h2>
<p>
	Important: You are sending us an email that will be read by a staff member as soon as possible. Please do not send unsolicited material, promotions or requests. If this is a time sensitive matter, consider calling us during business hours on 0302 662234
</p>

<form method="post">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<label class="label">Your Email address</label>
	<p class="control">
		<input class="input @if ($errors->has('email')) is-danger @endif" name="email" type="text" placeholder="youremail@example.com" value="{{old('email')}}" >
	  	@if ($errors->has('email'))
			<span class="help is-danger">{{$errors->first('email')}}</span>
		@endif
	</p>

	<label class="label">Message</label>
	<p class="control">
		<textarea class="textarea @if ($errors->has('emailmessage')) is-danger @endif" name="emailmessage" placeholder="Kindly make your request brief. We'll get back in touch for more details">{{old('emailmessage')}}</textarea>
		@if ($errors->has('emailmessage'))
			<span class="help is-danger">{{$errors->first('emailmessage', 'you cannot leave this field empty')}}</span>
		@endif
	</p>
	<input type="submit" name="submit" class="button is-large" value="Send Email">
</form>

<script type="text/javascript">
	document.getElementById('removeNotification').addEventListener('click', function(){
		document.getElementById('notification').remove();
	});
</script>

@stop