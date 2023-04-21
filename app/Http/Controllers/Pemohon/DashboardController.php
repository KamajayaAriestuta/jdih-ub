<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function profil(){
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('pemohon.profil', compact('user', 'jumlah_user'));
    }
    public function update(Request $request, $user_id){

        $user = $request->except('_token');
        $request->validate([
            'name'=>'string',
            'email'=>'email',
            'password'=>'string',
            'phone_number'=>'string',
            'avatar'=>'image|mimes:img,jpeg,jpg,png',
            'role'=>'admin',
            'unit_kerja_id'=>'string',
        ]);

        $data = User::find($user_id);

        if ($request->avatar){
            $fileUpload = $request->avatar;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
            $user['avatar'] = $originalFileUpload;
        } 

        $data->update($user);
        return redirect()->route('pemohon.profil')->with('success', 'Profil Diperbarui');
    }
}
