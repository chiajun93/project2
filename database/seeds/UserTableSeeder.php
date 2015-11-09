<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'name' => 'tester',
        	'email' => 'test@yopmail.com',
        	'password' => bcrypt('123123123'),
        ]);
    }
}
