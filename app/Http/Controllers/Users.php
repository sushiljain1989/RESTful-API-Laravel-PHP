<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //


    /**
     * @author [Sushil Jain]
     * This function returs the Name and ID of a user
     * @param  [int] $id [ID of the user]
     * @return [array]     [returns the name and ID of the request user]
     * @lastModifiedBy [Sushil Jain]
     *
     */
    function getUser($id)
    {
      //fetch user details recognized by ID, e.g. SSN
      return ["Used ID" => $id,'name'=>"Sushil Jain"]; //return person name

    }

    /**
     * @author [Sushil Jain]
     * [This function creates a new user and values are received through http POST method]
     * @param  Request $request [HTTP request object, in order to get values for creating a user]
     * @return [array]           [success message]
     * @lastModifiedBy [Sushil Jain]
     */
    function createUser(Request $request)
    {
      //create a new user, user must have name

      return ['status' => 1, 'message' => 'user created successfully']; //return user id

    }

    /**
     * @author [Sushil Jain]
     * [updateName this function updates the name of a user identified by ID]
     * @param  Request $request [HTTP request object, it holds ID and new name for user]
     * @return [array]           [success message]
     * @lastModifiedBy [Sushil Jain]
     */
    function updateName(Request $request)
    {
      //update person name, if person exists
      return ['id' => 1, "name" => "Rinku Jain", 'message' => "Name updated successfully"]; //return updated name along with ID

    }

    /**
     * @author [Sushil Jain]
     * [deleteUser - this function deletes the user identified by ID]
     * @param  Request $request [HTTP request object, it holds ID of a user]
     * @return [array]           [success message]
     * @lastModifiedBy [Sushil Jain]
     *
     */
    function deleteUser(Request $request)
    {
      //delete person recognized by ID
      return ['status'=> 1, 'message' => "User deleted successfully"]; //1 means user is deleted successfully

    }


}
