<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function HalamanLogin(){
        return view('welcome');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
 
        return back()->withErrors([
            'username' => 'Username tidak sesuai dengan data yang ada',
        ])->onlyInput('username')->with('alert.gagal',true);
    }

    public function register(){
        return view('buat-akun');
    }

    public function storeakun(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'User',
        ]);
                
        return redirect()->route('login.index');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
