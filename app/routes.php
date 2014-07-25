<?php

Route::get('/', ['as' => 'home', 'uses' => 'LinksController@create']);

Route::post('Links', 'LinksController@store');

Route::get('{hash}', 'LinksController@translateHash');