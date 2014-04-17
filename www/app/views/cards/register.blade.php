@extends('layout')

@section('content')
{{ Form::open(array('url'=>'register')) }}
<h1>Register</h1>
<p class="errors">
	@foreach($errors->all() as $error)
		{{$error}} <br />
	@endforeach
</p>
<p>
{{ Form::label('firstname','First Name') }} 
{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
</p>
<p>
{{ Form::label('lastname','Last Name') }} 
{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
</p>
<p>
{{ Form::label('username','Username') }} 
{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
</p>
<p>
{{ Form::label('email','Email Address') }} 
{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
</p>
<p>
{{ Form::label('password','Password') }} 
{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
</p>
<p>
{{ Form::label('password_confirmation','Confirm Password') }} 
{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
</p>
 

<p>{{ Form::submit("Submit", array('class'=>'btn')) }}</p>
{{ Form::close() }}

@stop