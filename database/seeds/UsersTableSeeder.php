<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'ram',
        	'email'=>'ram@gmail.com',
        	'password'=>Hash::make('12345')

        	]);
    }
}
