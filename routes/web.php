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

#curl http://localhost/api/user/1
Route::get('api/user/{id}', 'Users@getUser');

#curl -H "Content-Type: application/json" -X POST -d '{"name":"Sushil Jain"}' \
#http://localhost/api/create-user
Route::post('api/create-user', 'Users@createUser');

#curl -X PUT -d id=v1 -d name="rinky"
Route::put('api/update-name', 'Users@updateName');

#curl -X DELETE -d "id:1" http://localhost/api/delete-user
Route::delete('api/delete-user', 'Users@deleteUser');
