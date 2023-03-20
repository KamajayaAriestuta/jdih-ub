<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials_admin = $request->only('email', 'password');
        $credentials_admin['role'] = ['admin'];

        $credentials_pemohon = $request->only('email', 'password');
        $credentials_pemohon['role'] = ['pemohon'];


        if(Auth::attempt($credentials_admin)){
            $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
        }

        if(Auth::attempt($credentials_pemohon)){
            $request->session()->regenerate();
                return redirect()->route('pemohon.dashboard');
        }
     
        return back()->withErrors([
            'error' => 'Your Credentials is Error'
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
