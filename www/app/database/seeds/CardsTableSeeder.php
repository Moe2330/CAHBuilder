<?php

class CardsTableSeeder extends Seeder{
	public function run(){
		DB::table('cards')->delete();

		for($i=0;$i<20;$i++){
			Cards::create(array(
				'text'=>'This is white card #'.$i,
				'color'=>'White',
				'createdBy'=>'Moe'
				));
		}

		Cards::create(array(
			'text'=>'This is a black card',
			'color'=>'Black',
			'createdBy'=>'Moe'
			));
	}
}