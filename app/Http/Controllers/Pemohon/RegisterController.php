<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemohon;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register(){
        $unit_kerja = Unit_Kerja::all();
        return view('pemohon.register', compact('unit_kerja'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required|min:6',
            'phone-number' => 'required', 
            'avatar' => 'nullable',
            'nomor' => 'required',
            'unit_kerja' => 'required',
            'jabatan' => 'required'
        ]);

        $data = $request->except('_token');

        $isEmailExist = Pemohon::where('email', $request->email)->exists();


        if($isEmailExist){
            return back()->withErrors([
                'email' => 'Email is Already Exist'
            ])->withInput();
        }

        $data['password']= Hash::make($request->password);

        Pemohon::create($data);
        return redirect()->route('admin.login');
    }
}
