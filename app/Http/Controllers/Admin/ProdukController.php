<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Raper;
use App\Models\Instruksi;
use App\Models\Edaran;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index(){
        $pertor = Produk::where('kategori_id', '1')->count();
        $perMWA = Produk::where('kategori_id', '2')->count();
        $perSAU = Produk::where('kategori_id', '3')->count();
        $produk = Produk::latest()->with(['kategori'])->paginate(3);
        $kategori = Kategori::all();
        $total = $pertor + $perMWA + $perSAU;
        $datas = Produk::with([
            'kategori'
        ])->get();
        
        return view('admin.produk', compact('pertor', 'perMWA', 'perSAU', 'produk', 'kategori', 'total', 'datas'));

    }
    public function pertor(){
        $pertor = Produk::where('kategori_id', '1')->get();
        return view('admin.pertor', compact('pertor'));
    }
    public function perMWA(){
        $perMWA = Produk::where('kategori_id', '2')->get();
        return view('admin.peraturan-MWA', compact('perMWA'));
    }
    public function perSAU(){
        $perSAU = Produk::where('kategori_id', '2')->get();
        return view('admin.peraturan-SAU', compact('perSAU'));
    }
    public function create(){
        $kategori = Kategori::all();
        return view('admin.produk-create', compact('kategori'));
    }
    public function edit($id){
        $kategori = Kategori::all();
        $data = Produk::find($id);
        $user= User::find(1);

        return view('admin.produk-edit', compact('kategori', 'data', 'user'));
    }
 
    public function store(Request $request){
        $produk_create = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'penyusun'=>'string',
            'kaitan'=>'string',
            'file_upload'=>'required|file|mimes:pdf',
        ]);
        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        
        $produk_create['file_upload'] = $originalFileUpload;

        Produk::create($produk_create);

        return redirect()->route('admin.produk')->with('success', 'Produk Ditambahkan');
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'penyusun'=>'string',
            'kaitan'=>'string',
            'file_upload'=>'file|mimes:pdf'
        ]);
    
        $datas = Produk::find($id);
    
        if($request->hasFile('file_upload')) {
            $fileUpload = $request->file_upload;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
    
            $data['file_upload'] = $originalFileUpload;
        } else {
            unset($data['file_upload']);
        }
    
        $datas->update($data);
        return redirect()->route('admin.produk')->with('success', 'Produk Diperbarui');
    }
    
    public function delete($id){
        Produk::find($id)->delete();
        return redirect()->route('admin.produk')->with('success', 'Produk Dihapus');
    }

    public function raper(){
        $kategori = Kategori::all();
        $data_raper = Raper::with([
            'kategori'
        ])->get();
        
        return view('admin.raper', compact('kategori', 'data_raper'));
    }
    public function raper_create(){
        $kategori = Kategori::all();
        return view('admin.raper-create', compact('kategori'));
    }
    public function raper_store(Request $request){
        $raper_create = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
        ]);

        Raper::create($raper_create);

        return redirect()->route('admin.raper')->with('success', 'Rancangan Ditambahkan');
    }
    public function raper_edit($id){
        $kategori = Kategori::all();
        $data = Raper::find($id);
        return view('admin.raper-edit', compact('kategori', 'data'));
    }

    public function raper_update(Request $request, $id){
        $data = $request->except('_token');
        
        $request->validate([
            'perihal'=>'required|string',
            'kategori_id'=>'required',
        ]);
    
        $datas = Raper::find($id);
    
        $datas->update($data);
        return redirect()->route('admin.raper')->with('success', 'Rancangan Diperbarui');
    }
    
    public function raper_delete($id){
        Raper::find($id)->delete();
        return redirect()->route('admin.raper')->with('success', 'Rancangan Dihapus');
    }

    public function instruksi(){
        $kategori = Kategori::all();
        $data_instruksi = Instruksi::all();
        
        return view('admin.instruksi', compact('kategori', 'data_instruksi'));
    }
    public function instruksi_create(){
        $kategori = Kategori::all();
        return view('admin.instruksi-create', compact('kategori'));
    }
    public function instruksi_store(Request $request){
        $instruksi_create = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'file_upload'=>'file|mimes:pdf'
        ]);
        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        
        $instruksi_create['file_upload'] = $originalFileUpload;

        Instruksi::create($instruksi_create);

        return redirect()->route('admin.instruksi')->with('success', 'Rancangan Ditambahkan');
    }
    public function instruksi_edit($id){
        $kategori = Kategori::all();
        $data = Instruksi::find($id);
        return view('admin.instruksi-edit', compact('kategori', 'data'));
    }

    public function instruksi_update(Request $request, $id){
        $data = $request->except('_token');
        
        $request->validate([
            'perihal'=>'required|string',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'tanggal_ditetapkan'=>'string',
            'file_upload'=>'file|mimes:pdf'
        ]);

        if($request->hasFile('file_upload')) {
            $fileUpload = $request->file_upload;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
    
            $data['file_upload'] = $originalFileUpload;
        } else {
            unset($data['file_upload']);
        }
    
        $datas = Instruksi::find($id);
    
        $datas->update($data);
        return redirect()->route('admin.instruksi')->with('success', 'Instruksi Diperbarui');
    }
    
    public function instruksi_delete($id){
        Instruksi::find($id)->delete();
        return redirect()->route('admin.instruksi')->with('success', 'Instruksi Dihapus');
    }

    public function edaran(){
        $kategori = Kategori::all();
        $data_edaran = Edaran::all();
        
        return view('admin.edaran', compact('kategori', 'data_edaran'));
    }
    public function edaran_create(){
        $kategori = Kategori::all();
        return view('admin.edaran-create', compact('kategori'));
    }
    public function edaran_store(Request $request){
        $edaran_create = $request->except('_token');
        $request->validate([
            'perihal'=>'required|string',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'file_upload'=>'file|mimes:pdf'
        ]);
        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        
        $edaran_create['file_upload'] = $originalFileUpload;

        Edaran::create($edaran_create);

        return redirect()->route('admin.edaran')->with('success', 'Surat Edaran Ditambahkan');
    }
    public function edaran_edit($id){
        $kategori = Kategori::all();
        $data = Edaran::find($id);
        return view('admin.edaran-edit', compact('kategori', 'data'));
    }

    public function edaran_update(Request $request, $id){
        $data = $request->except('_token');
        
        $request->validate([
            'perihal'=>'required|string',
            'nomor'=>'required|string',
            'tahun'=>'required|string',
            'file_upload'=>'file|mimes:pdf'
        ]);

        if($request->hasFile('file_upload')) {
            $fileUpload = $request->file_upload;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
    
            $data['file_upload'] = $originalFileUpload;
        } else {
            unset($data['file_upload']);
        }
    
        $datas = Edaran::find($id);
    
        $datas->update($data);
        return redirect()->route('admin.edaran')->with('success', 'Surat Edaran Diperbarui');
    }
    
    public function edaran_delete($id){
        Edaran::find($id)->delete();
        return redirect()->route('admin.edaran')->with('success', 'Surat Edaran Dihapus');
    }
}
