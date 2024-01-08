<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        return view('user.cari_produk', compact('kategori','status', 'unit_kerja'));

    }

    public function search(Request $request){
        $db_data = Produk::with([
            'kategori'
        ])->get();
        $kategori = Kategori::all();
        $result = Produk::orderBy('tanggal_ditetapkan', 'desc')->get();
        
        if($request->perihal){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->perihal. '%')->get();
        }
        if($request->jenis){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->jenis. '%')->get();
        }
        if($request->get('nomor')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')->get();
        }
        if($request->get('tahun')){
            $result = Produk::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')->get();
        }
        if($request->get('perihal') && $request->get('kategori_id')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('kategori_id'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('nomor')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('nomor')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('tahun')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }

        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        
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

        if($result->isEmpty()){
            $error_image = 'template_user/img/background-awal.png';
            return view('user.hasil_pencarian', compact('db_data','kategori', 'result', 'per2023', 'per2022', 'per2021', 'per2020', 'per2019', 'per2018', 'per2017', 'per2016', 'per2015', 'per2014', 'per2013', 'per2012', 'per2011', 'per2010', 'per2009', 'error_image'));
        }
        return view('user.hasil_pencarian', compact('db_data', 'kategori', 'result', 'per2023', 'per2022', 'per2021', 'per2020', 'per2019', 'per2018', 'per2017', 'per2016', 'per2015', 'per2014', 'per2013', 'per2012', 'per2011', 'per2010', 'per2009'));
    }
    public function produk(){
        $db_data = Produk::all();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        return view('user.produk', compact('db_data','kategori'));
    }
}
