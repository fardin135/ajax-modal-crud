<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserData() {
        $users = User::get();
        return response()->json([
            'users'=> $users
        ]);
    }
    public function userPage(){
        return view('users.pages.user');
    }

    public function userPage2()
    {
        return view('users.user');
    }
}
