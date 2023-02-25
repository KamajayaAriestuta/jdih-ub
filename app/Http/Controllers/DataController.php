<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{


    public function index(){
        $datas = Data::with([
            'kategori',
            'status'
        ])->get();
        return view('admin.data', ['datas' => $datas]);
    }

    public function create(){
        $kategori = Kategori::all();
        $status = Status::all();
        return view('admin.data-create', compact('kategori', 'status'));
    }
    public function edit($id){
        $kategori = Kategori::all();
        $status = Status::all();
        $data = Data::find($id);
        return view('admin.data-edit', compact('kategori', 'status', 'data'));
        
    }
 
    public function store(Request $request){
        $data_create = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
            'nomor'=>'required|string',
            'nomor_perundangan'=>'string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'tanggal_diundangkan'=>'string',
            'kaitan'=>'string',
            'file_upload'=>'required|file|mimes:pdf',
            'status_id' =>'required',
            'rekomendasi'=>'required'
        ]);

        $fileUpload = $request->file_upload;

        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();

        $fileUpload->storeAs('public/file', $originalFileUpload);
        
        $data_create['file_upload'] = $originalFileUpload;

        Data::create($data_create);

        return redirect()->route('admin.data')->with('success', 'Data Ditambahkan');
    }

    public function update(Request $request, $id){

        $data = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
            'nomor'=>'required|string',
            'nomor_perundangan'=>'string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'tanggal_diundangkan'=>'string',
            'kaitan'=>'string',
            'file_upload'=>'file|mimes:pdf',
            'status_id'=>'required',
            'rekomendasi'=>'required'
        ]);

        $datas = Data::find($id);

        if($request->file_upload){

        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        $data['file_upload'] = $originalFileUpload;

        Storage::delete('public/file/'.$data->file_upload);
        
        }

        $datas->update($data);
        return redirect()->route('admin.data')->with('success', 'Data Diperbarui');
    }
    public function delete($id){
        Data::find($id)->delete();
        return redirect()->route('admin.data')->with('success', 'Data Dihapus');
    }
}
