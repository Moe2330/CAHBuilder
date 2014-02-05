<?php

class CardsTableSeeder extends Seeder{
	public function run(){
		DB::table('cards')->delete();
		Cards::create(array(
			'text'=>'This is a white card',
			'type'=>'White'
			));

		Cards::create(array(
			'text'=>'This is a black card',
			'type'=>'Black'
			));
	}
}