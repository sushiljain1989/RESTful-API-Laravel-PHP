<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //


    /*Route::get('user/{id}', 'Users@getUser');
    Route::post('create-user', 'Users@createUser');
    Route::put('update-name', 'Users@updateName');
    Route::delete('delete-user', 'Users@deleteUser'); */
    function getUser($id)
    {
      //fetch user details recognized by ID, e.g. SSN
      return ['name'=>"Sushil Jain"]; //return person name

    }

    function createUser(Request $request)
    {
      //create a new user, user must have name

      return ['status' => 1, 'message' => 'user created successfully']; //return user id

    }



    function updateName(Request $request)
    {
      //update person name, if person exists
      return ['id' => 1, "name" => "Rinku Jain", 'message' => "Name updated successfully"]; //return updated name along with ID

    }

    function deleteUser(Request $request)
    {
      //delete person recognized by ID
      return ['status'=> 1, 'message' => "User deleted successfully"]; //1 means user is deleted successfully

    }


}
