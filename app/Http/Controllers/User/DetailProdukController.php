<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\User;
use App\Models\Berita;
use App\Models\Unit_Kerja;

class DetailProdukController extends Controller
{
    public function detail($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $relasi_data = Produk::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->where('publikasi', '1')->where('approve', '1')->get();
        $produk_berlaku = Produk::latest()->where('status_id', '1')->where('publikasi', '1')->where('approve', '1')->with(['kategori'])->paginate(3);
        $detail = Produk::find($id);
        return view('user.detail_produk', compact('nasional', 'daerah', 'universitas', 'detail', 'relasi_data'
    , 'produk_berlaku'));
    }
    public function berita($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $berita = Berita::find($id);
        $detail_berita = Berita::latest()->paginate(3);
        return view('user.detail_berita', compact('berita', 'nasional', 'daerah', 'universitas', 'detail_berita'));
    }
    public function semua_berita(){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $berita = Berita::all();
        return view('user.berita', compact('berita', 'nasional', 'daerah', 'universitas'));

    }
}
