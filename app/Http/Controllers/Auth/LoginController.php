<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    public function index(){
        return view('auth.auth');
    }
    public function pending(){
        return view('pemohon.pending');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials_admin = $request->only('email', 'password');
        $credentials_admin['role'] = ['admin'];



        if(Auth::attempt($credentials_admin)){
            $request->session()->regenerate();
                return redirect()->route('admin.profil');
        }

     
        return back()->withErrors([
            'error' => 'Your Credentials is Error'
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
