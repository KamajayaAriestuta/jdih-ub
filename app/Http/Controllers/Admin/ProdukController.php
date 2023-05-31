<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\User;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index(){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $sum_uud = Produk::where('kategori_id', '1')->count();
        $sum_kep_mpr = Produk::where('kategori_id', '2')->count();
        $sum_uu = Produk::where('kategori_id', '3')->count();
        $sum_pp = Produk::where('kategori_id', '4')->count();
        $sum_perpres = Produk::where('kategori_id', '5')->count();
        $sum_kepres = Produk::where('kategori_id', '6')->count();
        $sum_ipres = Produk::where('kategori_id', '7')->count();
        $sum_permen = Produk::where('kategori_id', '8')->count();
        $sum_kepmen = Produk::where('kategori_id', '9')->count();
        $sum_se_men = Produk::where('kategori_id', '10')->count();
        $sum_nasional = $sum_uud + $sum_kep_mpr + $sum_uu + $sum_pp +
        $sum_perpres + $sum_kepres + $sum_ipres + $sum_permen +
        $sum_kepmen + $sum_se_men;

        $sum_perda_prov = Produk::where('kategori_id', '11')->count();
        $sum_perda_kab = Produk::where('kategori_id', '12')->count();
        $sum_daerah = $sum_perda_prov + $sum_perda_kab;

        $sum_pertor = Produk::where('kategori_id', '13')->count();
        $sum_keptor = Produk::where('kategori_id', '14')->count();
        $sum_sp_rektor = Produk::where('kategori_id', '15')->count();
        $sum_se_rektor = Produk::where('kategori_id', '16')->count();
        $sum_sk_dekan = Produk::where('kategori_id', '17')->count();
        $sum_per_mwa = Produk::where('kategori_id', '18')->count();
        $sum_kep_mwa = Produk::where('kategori_id', '19')->count();
        $sum_per_sau = Produk::where('kategori_id', '20')->count();
        $sum_kep_sau = Produk::where('kategori_id', '21')->count();
        $sum_st_rektor = Produk::where('kategori_id', '22')->count();
        $sum_st_dekan = Produk::where('kategori_id', '23')->count();
        $sum_st_kepala_lembaga = Produk::where('kategori_id', '24')->count();
        $sum_st_kepala_biro = Produk::where('kategori_id', '25')->count();
        $sum_universitas = $sum_pertor + $sum_keptor + $sum_sp_rektor + $sum_se_rektor +
        $sum_sk_dekan + $sum_per_mwa + $sum_kep_mwa + $sum_per_sau + $sum_kep_sau + 
        $sum_st_rektor + $sum_st_dekan + $sum_st_kepala_lembaga + $sum_st_kepala_biro;
        $sum_total = $sum_nasional + $sum_daerah + $sum_universitas;
        $datas = Produk::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.produk', ['datas' => $datas], compact('user', 'jumlah_user', 'kategori', 'nasional', 'daerah', 
        'universitas', 'status', 'unit_kerja', 'sum_nasional', 'sum_daerah', 
        'sum_universitas', 'sum_total'));
    }
    public function nasional(){
        $nasional = Produk::where('kategori_id', '1')
        ->orWhere('kategori_id', '2')
        ->orWhere('kategori_id', '3')
        ->orWhere('kategori_id', '4')
        ->orWhere('kategori_id', '5')
        ->orWhere('kategori_id', '6')
        ->orWhere('kategori_id', '7')
        ->orWhere('kategori_id', '8')
        ->orWhere('kategori_id', '9')
        ->orWhere('kategori_id', '10')
        ->with([
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.produk-nasional', compact('nasional', 'user', 'jumlah_user'));
    }
    public function daerah(){
        $daerah = Produk::where('kategori_id', '11')
        ->orWhere('kategori_id', '12')
        ->with([
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.produk-daerah', compact('daerah', 'user', 'jumlah_user'));
    }
    public function universitas(){
        $universitas = Produk::where('kategori_id', '13')
        ->orWhere('kategori_id', '14')
        ->orWhere('kategori_id', '15')
        ->orWhere('kategori_id', '16')
        ->orWhere('kategori_id', '17')
        ->orWhere('kategori_id', '18')
        ->orWhere('kategori_id', '19')
        ->orWhere('kategori_id', '20')
        ->orWhere('kategori_id', '21')
        ->orWhere('kategori_id', '22')
        ->orWhere('kategori_id', '23')
        ->orWhere('kategori_id', '24')
        ->orWhere('kategori_id', '25')
        ->with([
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.produk-universitas', compact('universitas', 'user', 'jumlah_user'));
    }
    public function create(){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.produk-create', compact('kategori', 'status', 'unit_kerja', 'user', 'jumlah_user'));
    }
    public function edit($id){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $data = Produk::find($id);
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.produk-edit', compact('kategori', 'status', 'data', 'user', 'jumlah_user'));
    }
 
    public function store(Request $request){
        $produk_create = $request->except('_token');
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
            'unit_kerja_id' => 'required',
            'publikasi' => 'string|required'
        ]);
        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        
        $produk_create['file_upload'] = $originalFileUpload;
        $produk_create['approve'] = '2';

        Produk::create($produk_create);

        return redirect()->route('admin.produk')->with('success', 'Produk Ditambahkan');
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
            'publikasi' => 'string|required'
        ]);

        $datas = Produk::find($id);

        if($request->file_upload){

        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        $data ['file_upload'] = $originalFileUpload;

        }

        $datas->update($data);
        return redirect()->route('admin.produk')->with('success', 'Produk Diperbarui');
    }
    public function delete($id){
        Produk::find($id)->delete();
        return redirect()->route('admin.produk')->with('success', 'Produk Dihapus');
    }
    
}
