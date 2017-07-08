<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('api/user/{id}', 'Users@getUser');
Route::post('api/create-user', 'Users@createUser');
Route::put('api/update-name', 'Users@updateName');
Route::delete('api/delete-user', 'Users@deleteUser');
