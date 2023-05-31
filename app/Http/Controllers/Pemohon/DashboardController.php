<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        $id_user = auth()->user()->unit_kerja_id;
        $sum_pertor = Produk::where('kategori_id', '13')->where('unit_kerja_id', $id_user)->count();
        $sum_keptor = Produk::where('kategori_id', '14')->where('unit_kerja_id', $id_user)->count();
        $sum_sk_dekan = Produk::where('kategori_id', '17')->where('unit_kerja_id', $id_user)->count();
        $sum_st_dekan = Produk::where('kategori_id', '23')->where('unit_kerja_id', $id_user)->count();
        $sum_total = $sum_pertor + $sum_keptor + 
        $sum_sk_dekan +  $sum_st_dekan;

        $Data = array
        ("0" => array ("value" => $sum_pertor, "name" => "Pertor"),
        "1" => array ("value" => $sum_keptor, "name" => "Keptor"),
        "2" => array ("value" => $sum_sk_dekan, "name" => "SK Dekan"),
        "3" => array ("value" => $sum_st_dekan, "name" => "ST Dekan"),
        ); 
        $user= User::find(1);
        $jumlah_user = $user->notifications->count(); 
        return view('pemohon.dashboard',['Data' => $Data], compact('sum_pertor', 'sum_keptor', 'sum_sk_dekan', 'sum_st_dekan', 'sum_total'));
          
    }

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
