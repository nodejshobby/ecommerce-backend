<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|alpha',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return response()->json($user, 201); 
    }
}
