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
        return view('admin.pemohon', ['data_pemohon' => $data_pemohon]);
    }
    public function delete($id){
    User::find($id)->delete();
    return redirect()->route('admin.pemohon')->with('success', 'Data Dihapus');
    }
}
