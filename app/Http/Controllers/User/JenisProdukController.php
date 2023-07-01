<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\User;
use App\Models\Unit_Kerja;

class JenisProdukController extends Controller
{

    public function insert($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $kategori = Kategori::all();
        $judul = Kategori::find($id);
        $data = Produk::where('kategori_id', $id)->get();
        return view('user.jenis_produk', compact('data', 'judul', 'nasional', 'daerah', 'universitas','kategori', 'status', 'unit_kerja'));
    }

    public function status($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $kategori = Kategori::all();
        $judul = Status::find($id);
        $data = Produk::where('status_id', $id)->where('publikasi', '1')->where('approve', '1')->get();
        return view('user.status_produk', compact('data', 'judul', 'nasional', 'daerah', 'universitas','kategori', 'status', 'unit_kerja'));
    }

    public function unit_kerja($id){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $kategori = Kategori::all();
        $judul = Unit_Kerja::find($id);
        $data = Produk::where('unit_kerja_id', $id)->where('publikasi', '1')->where('approve', '1')->get();
        return view('user.unit_kerja', compact('data', 'judul', 'nasional', 'daerah', 'universitas','kategori', 'status', 'unit_kerja'));
    }

}
