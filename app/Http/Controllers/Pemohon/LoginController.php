<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function index(){
        return view('pemohon.auth');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'pemohon';

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('pemohon.dashboard');
        }
        return back()->withErrors([
            'credentials' => 'Your credentials are Wrong'
        ])->withInput();
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('member.login');
    }
}
