<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\User;
use App\Models\Unit_Kerja;

class DetailProdukController extends Controller
{
    public function detail($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $relasi_data = Data::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->get();
        $detail = Data::find($id);
        return view('user.detail_produk', compact('nasional', 'daerah', 'universitas', 'detail', 'relasi_data'));
    }
}
