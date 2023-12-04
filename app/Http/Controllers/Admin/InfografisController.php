<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function index(){
        $pertor = Produk::where('kategori_id', '1')->count();
        $perMWA = Produk::where('kategori_id', '2')->count();
        $perSAU = Produk::where('kategori_id', '3')->count();
        $produk = Produk::latest()->with(['kategori'])->paginate(3);
        $kategori = Kategori::all();
        $total = $pertor + $perMWA + $perSAU;
        $datas = Produk::with([
            'kategori'
        ])->get();
        
        return view('admin.produk', compact('pertor', 'perMWA', 'perSAU', 'produk', 'kategori', 'total', 'datas'));

    }
}
