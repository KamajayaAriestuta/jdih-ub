<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PemohonController extends Controller
{
    public function index(){
        return view('pemohon.dashboard');
    }
    public function produk(){
        $identitas = auth()->user()->unit_kerja_id;
        $data = Produk::where('unit_kerja_id', $identitas)->with([
            'kategori',
            'status'
        ])->get();

        $identitas = auth()->user()->id;
        return view('pemohon.produk', ['data' => $data]);
    }
    public function unit(){
        $unit_kerja = auth()->user()->unit_kerja_id;
        $data_unit= Unit_Kerja::find($unit_kerja);

        $user_identitas = auth()->user()->unit_kerja_id;
        $unit_user = User::where('unit_kerja_id', $user_identitas)->get();

        return view('pemohon.unit_kerja', compact('data_unit', 'unit_user'));
    }

}
