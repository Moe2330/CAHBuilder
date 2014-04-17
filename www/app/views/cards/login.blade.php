@extends('layout')

@section('content')
{{ Form::open(array('url'=>'login')) }}
<h1>Login</h1>
<p class="errors">
	@foreach($errors->all() as $error)
		{{$error}} <br />
	@endforeach
</p>

<p>
	{{ Form::label('email','Email Address') }}
	{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}
</p>

<p>{{ Form::submit("Submit") }}</p>
{{ Form::close() }}
@stop