@extends('layout')

@section('content')
	{{ Form::open(array('url'=>'cards/create','class'=>'form-horizontal','role'=>'form')) }}
	<h2 class="form-signup-heading">Create a {{$color}} card</h2>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	<a href="{{URL::to('cards')}}">View Cards</a>
	{{ Form::hidden('color',$color) }}
	<div class="form-group">
	{{ Form::label('name','Name') }}
	{{ Form::text('name','Anonymous',array('class'=>'form-control','placeHolder'=>'Name','Value'=>'Anonymous','onClick'=>'this.select();')) }}
	</div>
	<div class="form-group">
	{{ Form::label('cardText','Card Text') }}
	{{ Form::textarea('cardText',null,array('class'=>'form-control', 'placeholder'=>'Card Text')) }}
	</div>
	<div class="form-group">
	{{ Form::submit('Create', array('class'=>'btn btn-primary')) }}
	</div>
	{{ Form::close() }}
@stop