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
    App::abort(404);
});

Route::group(array('prefix' => 'v1'), function()
{
    Route::controller('api', 'ApiV1Controller');
});

Route::group(array('prefix' => 'v1'), function()
{
    Route::controller('my-site', 'MySiteV1Controller');
});

Route::controller('users', 'UsersController');