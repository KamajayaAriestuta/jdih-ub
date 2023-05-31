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

        $credentials_superadmin = $request->only('email', 'password');
        $credentials_superadmin['role'] = ['superadmin'];

        $credentials_admin = $request->only('email', 'password');
        $credentials_admin['role'] = ['admin'];

        $credentials_pemohon = $request->only('email', 'password');
        $credentials_pemohon['role'] = ['pemohon'];
        
        $credentials_status = $request->only('email', 'password');
        $credentials_status['status'] = ['2'];

        if(Auth::attempt($credentials_status)){
            return redirect()->route('pemohon.pending');
        }

        if(Auth::attempt($credentials_superadmin)){
            $request->session()->regenerate();
                return redirect()->route('superadmin.profil');
        }

        if(Auth::attempt($credentials_admin)){
            $request->session()->regenerate();
                return redirect()->route('admin.profil');
        }

        if(Auth::attempt($credentials_pemohon)){
            $request->session()->regenerate();
                return redirect()->route('pemohon.profil');
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
