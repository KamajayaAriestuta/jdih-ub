<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{

    public function register(){
        $unit_kerja = Unit_Kerja::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('superadmin.tambah_admin', compact('unit_kerja', 'user', 'jumlah_user'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required|min:6',
            'phone_number' => 'required', 
            'avatar' => 'nullable|file|mimes:png, jpg, jpeg',
            'unit_kerja_id' => 'required',
            'unit_kerja_2_id' => '',
            'unit_kerja_3_id' => '',
        ]);

        $data = $request->except('_token');

        $isEmailExist = User::where('email', $request->email)->exists();


        if($isEmailExist){
            return back()->withErrors([
                'email' => 'Email is Already Exist'
            ])->withInput();
        }

        $data['password']= Hash::make($request->password);
        $data['role'] = 'admin';
        $data['status'] = '1';


        User::create($data);
        return redirect()->route('superadmin.admin');
    }
}
