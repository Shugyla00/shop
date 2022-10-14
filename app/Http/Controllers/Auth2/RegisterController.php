<?php

namespace App\Http\Controllers\Auth2;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
           'name' => 'required|string|max:255',
            'email' =>'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

//        User::create($validated);

    }
}
