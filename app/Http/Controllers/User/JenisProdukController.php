<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;

class JenisProdukController extends Controller
{
    public function insert($id){
        $kategori = Kategori::all();
        $judul = Kategori::find($id);
        $per2023 = Produk::where('tahun', '2023')->count();
        $per2022 = Produk::where('tahun', '2022')->count();
        $per2021 = Produk::where('tahun', '2021')->count();
        $per2020 = Produk::where('tahun', '2020')->count();
        $per2019 = Produk::where('tahun', '2019')->count();
        $per2018 = Produk::where('tahun', '2018')->count();
        $per2017 = Produk::where('tahun', '2017')->count();
        $per2016 = Produk::where('tahun', '2016')->count();
        $per2015 = Produk::where('tahun', '2015')->count();
        $per2014 = Produk::where('tahun', '2014')->count();
        $per2013 = Produk::where('tahun', '2013')->count();
        $per2012 = Produk::where('tahun', '2012')->count();
        $per2011 = Produk::where('tahun', '2011')->count();
        $per2010 = Produk::where('tahun', '2010')->count();
        $per2009 = Produk::where('tahun', '2009')->count();
        $data = Produk::where('kategori_id', $id)->orderBy('counter', 'desc')->paginate(10);
        $data_pagination = Produk::where('kategori_id', $id)->paginate(10);
        if ($id == 4) {
            $penyusun = Produk::where('penyusun')->get();
            return view('user.perdek', compact('data', 'judul','kategori', 'per2023', 'per2022', 'per2021', 'per2020', 'per2019', 'per2018', 'per2017', 'per2016', 'per2015', 
            'per2014', 'per2013', 'per2012', 'per2011', 'per2010', 'per2009', 'data_pagination', 'penyusun'));
        }
        return view('user.jenis_produk', compact('data', 'judul','kategori', 'per2023', 'per2022', 'per2021', 'per2020', 'per2019', 'per2018', 'per2017', 'per2016', 'per2015', 
        'per2014', 'per2013', 'per2012', 'per2011', 'per2010', 'per2009', 'data_pagination'
    ));
    }
    public function perdek($penyusun){
        $kategori = Kategori::all();
        if ($penyusun == "Fakultas Hukum"){
            $data = Produk::where('penyusun', $penyusun)->orderBy('counter', 'desc')->paginate(10);
        }
        $data_pagination = Produk::where('penyusun', $penyusun)->paginate(10);
        return view('user.jenis_perdek', compact('data', 'data_pagination' ));
    }
}
