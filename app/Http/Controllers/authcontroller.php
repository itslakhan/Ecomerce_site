<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class authcontroller extends Controller
{
    public function login(){
    
        return view('admin.login');
    }

    public function makelogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        
    ]);
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['message' => 'Invalid credentials']);
        }

    }
       

    public function dashboard(){
        return view('admin.dashboard');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('admin-login');
    }

}
