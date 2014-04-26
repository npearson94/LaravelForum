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

Route::group(['before' => 'auth', 'prefix' =>  'admin'], function()
{
    // Dashboard Route
    Route::get('/', [
        'as'        =>  'admin.dashboard',
        'uses'      =>  'AdminDashboardController@index',
        ]
    );

    // Settings Route
    Route::get('/settings', [
        'as'        =>  'admin.settings',
        'uses'      =>  'AdminSettingsController@index',
        ]
    );
});

Route::get('/login', [
        'before'    =>  'guest',
        'as'        =>  'login',
        'uses'      =>  'AuthController@getLogin',
    ]
);

Route::post('/login', [
        'as'        =>  'login',
        'uses'      =>  'AuthController@postLogin',
    ]
);

Route::get('/logout', [
        'before'    =>  'auth',
        'as'        =>  'logout',
        'uses'      =>  'AuthController@getLogout',
    ]
);