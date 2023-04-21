<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit_Kerja;
use App\Models\User;

class UnitKerjaController extends Controller
{
    public function index(){
        $data_unit = Unit_Kerja::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.unit_kerja', compact('data_unit', 'user', 'jumlah_user'));
    }

    public function create(){
        $kategori = Unit_Kerja::all();
        $unit_kerja = Unit_Kerja::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.unit-create', compact('kategori', 'unit_kerja', 'user', 'jumlah_user'));
    }

    public function edit($id){
        $kategori = Unit_Kerja::all();
        $data = Unit_Kerja::find($id);
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.unit-edit', compact('kategori', 'data', 'user', 'jumlah_user'));
    }
 
    public function store(Request $request){
        $data_create = $request->except('_token');
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string',

        ]);
        Unit_Kerja::create($data_create);
        return redirect()->route('admin.unit_kerja')->with('success', 'Data Ditambahkan');
    }

    public function update(Request $request, $id){

        $data = $request->except('_token');
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string'
        ]);

        $datas = Unit_Kerja::find($id);
        $datas->update($data);
        return redirect()->route('admin.unit_kerja')->with('success', 'Data Diperbarui');
    }

    public function destroy($id){
    Unit_Kerja::find($id)->delete();
    return redirect()->route('admin.unit_kerja')->with('success', 'Data Dihapus');
    }
}
