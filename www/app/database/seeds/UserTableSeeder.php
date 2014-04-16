<?php

class UserTableSeeder extends Seeder
{
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'name'=>'Sean Ruel',			
			'username'=>'seanmoe',
			'email'=>'malolas@gmail.com',
			'password'=>Hash::make('fluffybunny'),
			));
	}
}