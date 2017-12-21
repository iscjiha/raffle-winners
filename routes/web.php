<?php

// WinnerController Routes

Route::resource('winners', 'WinnerController');

Route::get('/', 'WinnerController@projection');
