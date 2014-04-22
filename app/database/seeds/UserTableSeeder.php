<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create(array(
           'email'      =>  'admin@laravelforum.com',
           'password'   =>  Hash::make('default'),
       ));
    }

}