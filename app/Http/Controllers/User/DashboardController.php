<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request){
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

        return view('user.dashboard', compact('kategori', 'nasional', 'daerah', 
        'universitas', 'status', 'unit_kerja', 'sum_nasional', 'sum_daerah', 'sum_universitas'));
    }
    public function kontak(){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        return view('user.kontak', compact('kategori', 'nasional', 'daerah', 
        'universitas', 'status', 'unit_kerja'));

    }

}
