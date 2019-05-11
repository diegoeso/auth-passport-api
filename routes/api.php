<?php

use App\User;
use Illuminate\Http\Request;
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return User::all();
});

Route::get('/users', 'UserController@index');
