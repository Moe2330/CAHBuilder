<?php

class CardsController extends BaseController {

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
	}	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$blackCount = DB::table('cards')->where('color','Black')->count();
		$whiteCount = DB::table('cards')->where('color','White')->count();

		$whiteCards = Cards::orderBy(DB::raw('RAND()'))->where('color','White')->take(10)->get();
		$blackCards = Cards::orderBy(DB::raw('RAND()'))->where('color','Black')->take(1)->get();

		/*$whiteCards = DB::table('cards')->where('color','White')->take(10)->get();
		$blackCards = DB::table('cards')->where('color','Black')->take(1)->get();*/

		return View::make('cards/index')->with('whiteCards',$whiteCards)->with('whiteCount',$whiteCount)->with('blackCards',$blackCards)->with('blackCount',$blackCount);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate($color)
	{
		if($color == "White" || $color == "Black"){
			return View::make('cards/create')->with('color',$color);
		} else {
			$cards = Cards::all();
			return Redirect::to('cards')->with('message','Please select a valid color!')->with('cards',$cards);
		}
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Cards::$rules);
			if($validator->passes()){
			$card = new Cards;
			$card->color = Input::get('color');
			$card->text = Input::get('cardText');
			$card->createdBy = Input::get('name');
			$card->save();

			return Redirect::to('cards')->with('message','Thanks for creating a card!');
		} else {
			$color = Input::get('color');
			return Redirect::to('cards/create/'.$color)->with('message','The following errors occured')->withErrors($validator)->withInput();
		}
	}

}