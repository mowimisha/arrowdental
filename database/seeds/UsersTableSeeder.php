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
        DB::table('users')->insert(array(
        	'name'=>'Admin',
        	'email'=>'info@arrowdent.co.ke',
        	'password'=>Hash::make('arrowdent@_001'),

          ));
    }
}
