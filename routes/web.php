<?php


Route::get('/form', 'FormController@create');
Route::post('/form', 'FormController@store');
