@extends('layout')

@section('content')
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<p><a href="{{ URL::to('cards/create',array('White'=>'White')) }}">Create a new white card!</a></p>
		<p><a href="{{ URL::to('cards/create',array('Black'=>'Black')) }}">Create a new black card!</a></p>
		<p>There are {{$whiteCount}} white cards</p>
		<p>There are {{$blackCount}} black cards</p>
	</div>
	</div>
	<div class="row">
	<div class="col-md-2 col-md-offset-4" id="blackCards">
	@foreach($blackCards as $blackCard)
		<div class="card black">{{ $blackCard->text }}</div>
	@endforeach
	</div>
	</div>
	<div class="row">
	<div class="col-md-12" id="whiteCards">
	@foreach($whiteCards as $whiteCard)
		<div class="card white">{{ $whiteCard->text }}</div>
	@endforeach
	</div>
	</div>
@stop