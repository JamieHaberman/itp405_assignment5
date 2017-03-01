<?php


Route::get('/', 'TweetsController@index');
Route::get('/tweets/{id}/destroy', 'TweetsController@destroy');
Route::post('/', 'TweetsController@store');
Route::get('/tweets/{id}', 'TweetsController@view');
Route::get('/tweets/{id}/edit', 'TweetsController@edit');
Route::post('/tweets/{id}/edit', 'TweetsController@update');
