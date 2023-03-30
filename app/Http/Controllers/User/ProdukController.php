<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;

class ProdukController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        return view('user.cari_produk', compact('kategori', 'status', 'unit_kerja'));

    }
    public function search(Request $request){
        $db_data = Data::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();


        if($request->perihal){
            $result = Data::where('perihal', 'LIKE', '%' .$request->perihal. '%')->get();
        }
        if($request->jenis){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->jenis. '%')->get();
        }
        if($request->get('nomor')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')->get();
        }
        if($request->get('tahun')){
            $result = Data::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')->get();
        }
        if($request->get('unit_kerja')){
            $result = Data::where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')->get();
        }
        if($request->get('status')){
            $result = Data::where('status_id', 'LIKE', '%' .$request->get('status'). '%')->get();
        }
        if($request->get('perihal') && $request->get('kategori_id')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('kategori_id'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('nomor')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('tahun')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('unit_kerja')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('jenis') && $request->get('nomor')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('tahun')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('unit_kerja')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('status')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('nomor') && $request->get('tahun')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('unit_kerja')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('status')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('tahun') && $request->get('unit_kerja')){
            $result = Data::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('tahun') && $request->get('status')){
            $result = Data::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('tahun')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('unit_kerja')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('nomor') && $request->get('tahun')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('nomor') && $request->get('unit_kerja')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('nomor') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('tahun') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('unit_kerja')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('status')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('jenis') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('tahun') && $request->get('status')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('nomor') && $request->get('tahun') && $request->get('unit_kerja')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('tahun') && $request->get('status')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('tahun') && $request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('tahun')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('unit_kerja')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }

        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun') 
        && $request->get('unit_kerja')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->get();
        }
        if($request->get('jenis') && $request->get('nomor') && $request->get('tahun') 
        && $request->get('status')){
            $result = Data::where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('nomor') && $request->get('tahun') && $request->get('unit_kerja') 
        && $request->get('status')){
            $result = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }
        if($request->get('perihal') && $request->get('jenis') && $request->get('nomor') 
        && $request->get('tahun') && $request->get('unit_kerja') && $request->get('status')){
            $result = Data::where('perihal', 'LIKE', '%' .$request->get('perihal'). '%')
            ->where('kategori_id', 'LIKE', '%' .$request->get('jenis'). '%')
            ->where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')
            ->where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')
            ->where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja'). '%')
            ->where('status_id', 'LIKE', '%' .$request->get('status'). '%')
            ->get();
        }


        return view('user.hasil_pencarian', compact('db_data', 'kategori', 'status', 'unit_kerja', 'result'));
    }




    // public function search(Request $request){
    //    $db_data = Data::all();

    //    $search_perihal = $request->get('perihal');
    //         $result = Data::where('perihal', 'LIKE', '%' .$search_perihal. '%')->get();

    //     // $search_nomor = $request->get('perihal');
    //     //     $result_nomor = Data::where('perihal', 'LIKE', '%' .$search_nomor. '%')->get();
        


    //     return view('user.hasil_pencarian', compact('db_data','result'));
    // }
}


// $searchText = $request->get('perihal', 'kategori_id', 'nomor', 'tahun', 'unit_kerja_id', 'status_id');
// $pencarian = Data::where('*', 'LIKE', '%' .$searchText. '%')
// ->get();

// return view('user.hasil_pencarian', compact('pencarian'));


        // if($$request->get('perihal') && $request->get('kategori_id') && $request->get('nomor') && $request->get('tahun') && $request->get('unit_kerja_id') && $request->get('status_id'){
        //     $result = Data::where('perihal', 'LIKE', '%' .$request->status_id. '%')
        //     ->where('kategori_id', 'LIKE', '%' .$request->kategori_id. '%')
        //     ->where('nomor', 'LIKE', '%' .$request->nomor. '%')
        //     ->where('tahun', 'LIKE', '%' .$request->tahun. '%')
        //     ->where('unit_kerja_id', 'LIKE', '%' .$request->kategori_id. '%')
        //     ->where('status_id', 'LIKE', '%' .$request->status_id. '%')
        //     ->get();
        // }

    //    $db_kategori = Data::table('kategori_id')->get();
    //    $db_nomor = Data::table('nomor')->get();
    //    $db_tahun = Data::table('tahun')->get();
    //    $db_unit_kerja = Data::table('unit_kerja_id')->get();
    //    $db_status = Data::table('status_id')->get();

        

    //    if($request->get('kategori_id')){
    //         $result_kategori = Data::where('kategori_id', 'LIKE', '%' .$request->get('kategori_id'). '%')->get();
    //     }
    //    if($request->get('nomor')){
    //         $result_nomor = Data::where('nomor', 'LIKE', '%' .$request->get('nomor'). '%')->get();
    //     }
    //     if($request->get('tahun')){
    //         $result_tahun = Data::where('tahun', 'LIKE', '%' .$request->get('tahun'). '%')->get();
    //     }
    //     if($request->get('unit_kerja_id')){
    //         $result_unit_kerja = Data::where('unit_kerja_id', 'LIKE', '%' .$request->get('unit_kerja_id'). '%')->get();
    //     }
    //     if($request->get('status_id')){
    //         $result_status = Data::where('status_id', 'LIKE', '%' .$request->get('status_id'). '%')->get();
    //     }
        // $result = [$result_perihal, $result_kategori, $result_nomor, $result_tahun, $result_unit_kerja, $result_status ];
