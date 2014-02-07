<?php

class CardsTableSeeder extends Seeder{
	public function run(){
		DB::table('cards')->delete();
		Cards::create(array(
			'text'=>'This is a white card',
			'color'=>'White',
			'createdBy'=>'Moe'
			));

		Cards::create(array(
			'text'=>'This is a black card',
			'color'=>'Black',
			'createdBy'=>'Moe'
			));
	}
}