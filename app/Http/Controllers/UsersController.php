<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // Get all users
    public function getUsers(){
        $users = User::get();
        return response()->json($users);
    }

    // Get single user
    public function getUser(Request $request){
        $id = $request->id;
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Insert single user
    public function createUser(Request $request){

        $request->validate([
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create($request->all());
        return response()->json(['message' => 'Insert success', 'data' => $user]);
    }

    // Update single user
    public function updateUser(Request $request){

        $id = $request->id;
        // print_r($request->all());
        // exit;
  
        $request->validate([
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        return response()->json(['message' => 'Update success', 'data' => $user]);
    }

    // Delete single user
    public function deleteUser($id){
        User::destroy($id);

        return response()->json(['message'=>'Delete success', 'data' => '']);
    }
}
