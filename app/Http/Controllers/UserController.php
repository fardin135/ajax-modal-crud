<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserData(Request $request) {
        $query = User::query();
        if (!$request->search) {
            $users = $query->orderBy('id','desc')->get();
        }else {
            $users = $query->where('name','LIKE', $request->search.'%')
            ->orWhere('email', 'LIKE', $request->search . '%')
            ->get();
        }
        return response()->json([
            'users'=> $users
        ]);
    }
    public function userPage(){
        return view('users.pages.user');
    }

    public function insertUsersData(Request $request){
        // try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:5',
            ]);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Data inserted successfully',
            ]);
        // } catch (Exception $e) {
            // return response()->json([
            //     'status'=>'error',
            //     // 'message' => 'Failed',400,
            //     'message' => $e->getMessage(),
            // ]);
        // }
    }
    public function deleteUsersData(User $id){
        if ($id) {
            $id->delete();
            return response()->json(['message' => 'User deleted successfully.']);
        }else {
            return response()->json(['message' => 'User not found']);
        }
    }

    public function updateGetUser(User $id){
        return response()->json(['users'=> $id]);
    }

    public function updateInsertUser(Request $request ){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=> 'required|email',
            'password' => 'required|string|min:5',
        ]);
        $user = User::where('id',$request->update_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data updated successfully',
        ]);
    }
}
