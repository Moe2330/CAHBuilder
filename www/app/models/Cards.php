<?php

class Cards extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cards';

	public static $rules = array(
		'cardText'=>'required');
}