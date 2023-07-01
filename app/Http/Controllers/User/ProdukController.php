<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;

class ProdukController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        return view('user.cari_produk', compact('kategori', 'nasional', 'daerah', 'universitas','status', 'unit_kerja'));

    }

    public function search(Request $request){
        $db_data = Produk::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->where('publikasi', '1')->where('approve', '1')->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();

        $result = Produk::all();
        
        if($request->perihal){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->perihal. '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->jenis){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->jenis. '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('tahun')){
            $result = Produk::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('unit_kerja')){
            $result = Produk::where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('status')){
            $result = Produk::where('status_id', 'LIKE', '%' .$request->get('status'). '%')->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('kategori_id')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('kategori_id'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('nomor')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('unit_kerja')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('jenis') && $request->get('nomor')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('tahun')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('unit_kerja')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('status')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor') && $request->get('unit_kerja')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor') && $request->get('status')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('tahun') && $request->get('unit_kerja')){
            $result = Produk::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('tahun') && $request->get('status')){
            $result = Produk::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('unit_kerja')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('perihal') && $request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('nomor') && $request->get('unit_kerja')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('nomor') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('perihal') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('tahun') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('unit_kerja')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('status')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('jenis') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('tahun') && $request->get('status')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('nomor') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor') && $request->get('tahun') && $request->get('status')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor') && $request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('tahun') && $request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('tahun')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('unit_kerja')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }

        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun') 
        && $request->get('unit_kerja')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun') 
        && $request->get('status')){
            $result = Produk::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('nomor') && $request->get('tahun') && $request->get('unit_kerja') 
        && $request->get('status')){
            $result = Produk::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('tahun') && $request->get('unit_kerja') && $request->get('status')){
            $result = Produk::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->where('publikasi', '1')->where('approve', '1')->get();
        }
        return view('user.hasil_pencarian', compact('db_data','nasional', 'daerah', 'universitas', 'kategori', 'status', 'unit_kerja', 'result'));
    }
    public function produk(){
        $db_data = Produk::all();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        return view('user.produk', compact('db_data','nasional', 'daerah', 'universitas', 'kategori', 'status', 'unit_kerja'));
    }
}
