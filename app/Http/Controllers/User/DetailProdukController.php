<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Berita;
use App\Models\Visit;

class DetailProdukController extends Controller
{
    public function detail($id){
        $pertor = Kategori::where('nama_kategori', 'Peraturan Rektor')->get();
        $perMWA = Kategori::where('nama_kategori', 'Peraturan Majelis Wali Amanat')->get();
        $perSAU = Kategori::where('nama_kategori', 'Peraturan Senat Akademik Universitas')->get();
        $relasi_data = Produk::with([
            'kategori',
        ])->get();
        $visit = Produk::where('id', $id)->first();
        if ($visit) {
            $visit->increment('counter');
            $visit->update(['last_visited_at' => now()]);
        } else {
            Produk::create([
                'counter' => 1,
                'last_visited_at' => now(),
            ]);
        }
        $produk_berlaku = Produk::latest()->with(['kategori'])->paginate(3);
        $detail = Produk::find($id);
        $kategori = Kategori::all();

        return view('user.detail_produk', compact('pertor', 'perMWA', 'perSAU', 'detail', 'relasi_data', 'kategori','produk_berlaku'));
    }
    public function berita($id){
        $kategori = Kategori::all();
        $berita = Berita::find($id);
        $detail_berita = Berita::latest()->paginate(3);
        return view('user.detail_berita', compact('berita', 'kategori', 'detail_berita'));
    }
    public function semua_berita(){
        $kategori = Kategori::all();
        $berita = Berita::all();
        return view('user.berita', compact('kategori', 'berita'));

    }
}
