<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/postcard/create', 'GuestController@createPostcard') -> name('postcard.create');

Route::post('/postcard/store', 'GuestController@storePostcard') -> name('postcard.store');

Route::get('/api/postcard/list', 'ApiController@getPostcards') -> name('postcard.list');
