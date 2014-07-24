<?php

Route::get('/', function()
{
	App::abort(404);
});


Route::controller('val-js', 'ValJsController');

Route::group(array('prefix' => 'val-js/v1'), function()
{
    Route::resource('/', 'ValJsController');
});