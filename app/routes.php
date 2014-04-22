<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('before' => 'auth', 'prefix' =>  'admin'), function()
{
    Route::get('/', array(
        'as'        =>  'admin.dashboard',
        'uses'      =>  'AdminDashboardController@index',
        )
    );
});

Route::get('/login', array(
        'before'    =>  'guest',
        'as'        =>  'login',
        'uses'      =>  'AuthController@getLogin',
    )
);

Route::post('/login', array(
        'as'        =>  'login',
        'uses'      =>  'AuthController@postLogin',
    )
);

Route::get('/logout', array(
        'before'    =>  'auth',
        'as'        =>  'logout',
        'uses'      =>  'AuthController@getLogout',
    )
);