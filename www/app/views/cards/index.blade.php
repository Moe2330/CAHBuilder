@extends('layout')

@section('content')
	Welcome to the Cards Section!
	<a href="#">Create a new card!</a>
	@foreach($cards as $card)
		<div class="card {{ $card->type }}">{{ $card->text }}</div>
	@endforeach
@stop