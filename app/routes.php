<?php

Route::get('/', function()
{
	App::abort(404);
});

// Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('validate', 'ValidateController');
});