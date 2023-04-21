<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Unit_Kerja;

class PemohonController extends Controller
{
    public function index(){
        $data_pemohon = User::where('role', 'pemohon')->with([
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        $jumlah_fh = User::where('unit_kerja_id', '1')->count();
        $jumlah_fv = User::where('unit_kerja_id', '2')->count();
        $jumlah_fmipa = User::where('unit_kerja_id', '3')->count();

        $jumlah_pemohon = User::whereNot('role', 'admin')->count();

        return view('admin.pemohon', ['data_pemohon' => $data_pemohon], compact('user', 'jumlah_user', 'jumlah_fh'
        , 'jumlah_fv', 'jumlah_fmipa', 'jumlah_pemohon'
    
    ));
    }
    public function edit($id){
        $unit_kerja = Unit_Kerja::all();
        $pemohon = User::find($id);
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.pemohon_edit', compact('pemohon', 'user', 'jumlah_user', 'unit_kerja'));
    }

    public function update(Request $request, $id){


        $user = $request->except('_token', 'password', 'role');
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'avatar'=>'image|mimes:img,jpeg,jpg,png',
            'unit_kerja_id'=>'required',
        ]);

        $data = User::find($id);

        if ($request->avatar){
            $fileUpload = $request->avatar;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
            $user['avatar'] = $originalFileUpload;
        } 

        $data->update($user);
        return redirect()->route('admin.pemohon')->with('success', 'Pemohon Diedit');
    }
    public function delete($id){
    User::find($id)->delete();
    return redirect()->route('admin.pemohon')->with('success', 'Data Dihapus');
    }
}
