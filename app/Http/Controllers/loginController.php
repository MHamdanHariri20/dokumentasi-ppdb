<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
}
