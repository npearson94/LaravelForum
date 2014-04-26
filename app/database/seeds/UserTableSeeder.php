<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'email'      =>  'admin@laravelforum.com',
           'password'   =>  Hash::make('default'),
           'first_name' =>  'John',
           'last_name'  =>  'Smith',
       ]);
    }

}