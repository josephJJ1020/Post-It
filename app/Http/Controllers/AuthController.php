<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register page
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Create User
     */
    public function store(Request $request)
    {
        // validate form inputs
        $validated = request()->validate([
            'username' => "required|min:3|max:20|unique:users,username",
            'password' => 'required|min:8|max:25|confirmed',
        ]);

        // create user and set attributes
        $user = new User();
        $user->username = $validated["username"];
        $user->password = Hash::make($validated["password"]);

        // redirect to feed and show toast
        return redirect()->route('feed')->with('toast', ['type' => 'success', 'message' =>'Welcome, '.$user->username.'!']);
    }
}
