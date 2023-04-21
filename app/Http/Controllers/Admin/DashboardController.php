<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use App\Models\User;
use App\Models\Notifications;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Notifications\UserFollowNotification;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{
    public function index(){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $sum_uud = Data::where('kategori_id', '1')->count();
        $sum_kep_mpr = Data::where('kategori_id', '2')->count();
        $sum_uu = Data::where('kategori_id', '3')->count();
        $sum_pp = Data::where('kategori_id', '4')->count();
        $sum_perpres = Data::where('kategori_id', '5')->count();
        $sum_kepres = Data::where('kategori_id', '6')->count();
        $sum_ipres = Data::where('kategori_id', '7')->count();
        $sum_permen = Data::where('kategori_id', '8')->count();
        $sum_kepmen = Data::where('kategori_id', '9')->count();
        $sum_se_men = Data::where('kategori_id', '10')->count();
        $sum_nasional = $sum_uud + $sum_kep_mpr + $sum_uu + $sum_pp +
        $sum_perpres + $sum_kepres + $sum_ipres + $sum_permen +
        $sum_kepmen + $sum_se_men;

        $sum_perda_prov = Data::where('kategori_id', '11')->count();
        $sum_perda_kab = Data::where('kategori_id', '12')->count();
        $sum_daerah = $sum_perda_prov + $sum_perda_kab;

        $sum_pertor = Data::where('kategori_id', '13')->count();
        $sum_keptor = Data::where('kategori_id', '14')->count();
        $sum_sp_rektor = Data::where('kategori_id', '15')->count();
        $sum_se_rektor = Data::where('kategori_id', '16')->count();
        $sum_sk_dekan = Data::where('kategori_id', '17')->count();
        $sum_per_mwa = Data::where('kategori_id', '18')->count();
        $sum_kep_mwa = Data::where('kategori_id', '19')->count();
        $sum_per_sau = Data::where('kategori_id', '20')->count();
        $sum_kep_sau = Data::where('kategori_id', '21')->count();
        $sum_st_rektor = Data::where('kategori_id', '22')->count();
        $sum_st_dekan = Data::where('kategori_id', '23')->count();
        $sum_st_kepala_lembaga = Data::where('kategori_id', '24')->count();
        $sum_st_kepala_biro = Data::where('kategori_id', '25')->count();
        $sum_universitas = $sum_pertor + $sum_keptor + $sum_sp_rektor + $sum_se_rektor +
        $sum_sk_dekan + $sum_per_mwa + $sum_kep_mwa + $sum_per_sau + $sum_kep_sau + 
        $sum_st_rektor + $sum_st_dekan + $sum_st_kepala_lembaga + $sum_st_kepala_biro;
        $sum_total = $sum_nasional + $sum_daerah + $sum_universitas;

        $Data = array
        ("0" => array ("value" => $sum_nasional, "name" => "Nasional"),
        "1" => array ("value" => $sum_daerah, "name" => "Daerah"),
        "2" => array ("value" => $sum_universitas, "name" => "Universitas"),
    
    ); 
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        // $waktu= Notifications::find(1)->where('created_at');
        // $waktu_now = time();
        // $tampil_waktu = $waktu_now-$waktu;


        $tahun_2023 = Data::where('tahun', '2023')->count();
        $tahun_2022 = Data::where('tahun', '2022')->count();
        $tahun_2021 = Data::where('tahun', '2021')->count();
        $tahun_2020 = Data::where('tahun', '2020')->count();
        $tahun_2019 = Data::where('tahun', '2019')->count();
        $tahun_2018 = Data::where('tahun', '2018')->count();
        return view('admin.dashboard',['Data' => $Data], compact('kategori', 'nasional', 'daerah', 
        'universitas', 'status', 'unit_kerja', 'sum_nasional', 'sum_daerah', 
        'sum_universitas', 'sum_total', 'user', 'jumlah_user', 'tahun_2023',
        'tahun_2022', 'tahun_2021', 'tahun_2020', 'tahun_2019', 'tahun_2018'
    ));
          
    }

    public function profil(){
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.profil', compact('user', 'jumlah_user'));
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
        return redirect()->route('admin.profil')->with('success', 'Profil Diperbarui');
    }

    public function notify(){
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.notify', compact('user', 'jumlah_user'));
    }
    public function maskared($id){
        $user= User::find(1);
        Notifications::find($id)->delete();
        return view('admin.notify', compact('user'));
        // ->with('success', 'Notifikasi Berhasil di hapus');
    }
}
