<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PemohonController extends Controller
{
    public function index(){
        $data_pemohon = User::where('role', 'pemohon')->with([
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        $jumlah_fh = User::where('unit_kerja_id', '1')->count();
        $jumlah_fv = User::where('unit_kerja_id', '2')->count();
        $jumlah_fmipa = User::where('unit_kerja_id', '3')->count();

        $jumlah_pemohon = User::whereNot('role', 'admin')->count();

        return view('admin.pemohon', ['data_pemohon' => $data_pemohon], compact('user', 'jumlah_user', 'jumlah_fh'
        , 'jumlah_fv', 'jumlah_fmipa', 'jumlah_pemohon'
    
    ));
    }
    public function delete($id){
    User::find($id)->delete();
    return redirect()->route('admin.pemohon')->with('success', 'Data Dihapus');
    }
}
