<?php
// Route::get('/','PageController@home');

// Route::get('/about', 'PageController@about');

// Route::get('/contact', 'PageController@contact');

Route::get('post/{slug}', 'PostController@show');
