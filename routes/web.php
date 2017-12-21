<?php

Route::resource('winners', 'WinnerController');
Route::get('/', 'WinnerController@index');
