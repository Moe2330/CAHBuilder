@extends('layout')

@section('content')
	{{HTML::script('js/cards.js')}}
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<p>Use the links below to create new cards<p>
		<p>Use the up and down arrows on the cards to vote on which cards you like or dont like!</p>
		<p><a href="{{ URL::to('cards/create',array('White'=>'White')) }}">Create a new white card!</a></p>
		<p><a href="{{ URL::to('cards/create',array('Black'=>'Black')) }}">Create a new black card!</a></p>
		<p>There are {{$white['count']}} white cards</p>
		<p>There are {{$black['count']}} black cards</p>
	</div>
	</div>
	<div class="row">
	<div class="col-md-1" id="blackCards">
	@foreach($black['cards'] as $blackCard)
		<div class="card black">
			{{ $blackCard->text }}
			<div class="card-footer">
			<button class="btn btn-default btn-xs vote voteup_{{$blackCard->id}}" dir="up" id="{{$blackCard->id}}">
				<span class="glyphicon glyphicon-arrow-up"></span>
			</button>
			<button class="btn btn-default btn-xs vote votedown_{{$blackCard->id}}" dir="down" id="{{$blackCard->id}}">
				<span class="glyphicon glyphicon-arrow-down"></span>
			</button> 
			<span id="votes_{{$blackCard->id}}">
				{{ $blackCard->votes }}
			</span>
			</div>
		</div>
	@endforeach
	</div>
	</div>
	<div class="row">
	<h1>Select One</h1>
	<div class="col-md-12" id="whiteCards">
	@foreach($white['cards'] as $whiteCard)
		<div class="card white">
			{{ $whiteCard->text }}
			<div class="card-footer">
			<p>
			<button class="btn btn-default btn-xs vote voteup_{{$whiteCard->id}}" dir="up" id="{{$whiteCard->id}}">
				<span class="glyphicon glyphicon-arrow-up"></span>
			</button>
			<button class="btn btn-default btn-xs vote votedown_{{$whiteCard->id}}" dir="down" id="{{$whiteCard->id}}">
				<span class="glyphicon glyphicon-arrow-down"></span>
			</button> 
			<span id="votes_{{$whiteCard->id}}">
				{{ $whiteCard->votes }}
			</span>
			</p>
			<button class="btn btn-default choose_{{$whiteCard->id}}" id="{{$whiteCard->id}}">Select this Card</button>
			</div>
		</div>
	@endforeach
	</div>
	</div>
	<div class="row">
		<h1>Card History</h1>
		<div class="col-md-12" id="cardhistory">
		Display History of Selected Cards Here
		</div>
	</div>
@stop