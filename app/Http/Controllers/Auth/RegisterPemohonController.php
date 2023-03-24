<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Hash;

class RegisterPemohonController extends Controller
{

    public function register(){
        $unit_kerja = Unit_Kerja::all();
        return view('auth.pemohon-create', compact('unit_kerja'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required|min:6',
            'phone_number' => 'required', 
            'avatar' => 'nullable|file|mimes:png, jpg, jpeg',
            'unit_kerja_id' => 'required'
        ]);

        $data = $request->except('_token');

        $isEmailExist = User::where('email', $request->email)->exists();


        if($isEmailExist){
            return back()->withErrors([
                'email' => 'Email is Already Exist'
            ])->withInput();
        }

        $data['password']= Hash::make($request->password);
        $data['role'] = 'pemohon';


        User::create($data);
        return redirect()->route('login');
    }
}
