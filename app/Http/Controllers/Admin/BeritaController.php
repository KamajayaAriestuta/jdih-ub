<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.berita', compact('berita', 'user', 'jumlah_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $berita = Berita::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.berita-create', compact('berita', 'user', 'jumlah_user'));

    }

    public function edit($id){
        $berita = Berita::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        $data = Berita::find($id);

        return view('admin.berita-edit', compact('berita', 'user', 'jumlah_user', 'data'));
    }

    public function store(Request $request){
        $berita_create = $request->except('_token');
        $request->validate([
            'judul'=>'string',
            'text'=>'string',
            'file_upload'=>'image|mimes:img,jpeg,jpg,png',

        ]);
        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);        
        $berita_create['file_upload'] = $originalFileUpload;

        Berita::create($berita_create);

        return redirect()->route('admin.berita')->with('success', 'Berita Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'judul'=>'required|string',
            'text'=>'required|string',
            'file_upload'=>'image|mimes:img,jpeg,jpg,png',

        ]);

        $data_berita = Berita::find($id);

        if($request->file_upload){

        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        $data ['file_upload'] = $originalFileUpload;

        }

        $data_berita->update($data);
        return redirect()->route('admin.berita')->with('success', 'Berita Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Berita::find($id)->delete();
        return redirect()->route('admin.berita')->with('success', 'Berita Dihapus');

    }
}
