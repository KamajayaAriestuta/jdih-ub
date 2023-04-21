<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\User;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index(){
        $nasional = Kategori::where('role_kategori', 'Nasional')->get();
        $daerah = Kategori::where('role_kategori', 'Daerah')->get();
        $universitas = Kategori::where('role_kategori', 'Universitas')->get();
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $sum_uud = Data::where('kategori_id', '1')->count();
        $sum_kep_mpr = Data::where('kategori_id', '2')->count();
        $sum_uu = Data::where('kategori_id', '3')->count();
        $sum_pp = Data::where('kategori_id', '4')->count();
        $sum_perpres = Data::where('kategori_id', '5')->count();
        $sum_kepres = Data::where('kategori_id', '6')->count();
        $sum_ipres = Data::where('kategori_id', '7')->count();
        $sum_permen = Data::where('kategori_id', '8')->count();
        $sum_kepmen = Data::where('kategori_id', '9')->count();
        $sum_se_men = Data::where('kategori_id', '10')->count();
        $sum_nasional = $sum_uud + $sum_kep_mpr + $sum_uu + $sum_pp +
        $sum_perpres + $sum_kepres + $sum_ipres + $sum_permen +
        $sum_kepmen + $sum_se_men;

        $sum_perda_prov = Data::where('kategori_id', '11')->count();
        $sum_perda_kab = Data::where('kategori_id', '12')->count();
        $sum_daerah = $sum_perda_prov + $sum_perda_kab;

        $sum_pertor = Data::where('kategori_id', '13')->count();
        $sum_keptor = Data::where('kategori_id', '14')->count();
        $sum_sp_rektor = Data::where('kategori_id', '15')->count();
        $sum_se_rektor = Data::where('kategori_id', '16')->count();
        $sum_sk_dekan = Data::where('kategori_id', '17')->count();
        $sum_per_mwa = Data::where('kategori_id', '18')->count();
        $sum_kep_mwa = Data::where('kategori_id', '19')->count();
        $sum_per_sau = Data::where('kategori_id', '20')->count();
        $sum_kep_sau = Data::where('kategori_id', '21')->count();
        $sum_st_rektor = Data::where('kategori_id', '22')->count();
        $sum_st_dekan = Data::where('kategori_id', '23')->count();
        $sum_st_kepala_lembaga = Data::where('kategori_id', '24')->count();
        $sum_st_kepala_biro = Data::where('kategori_id', '25')->count();
        $sum_universitas = $sum_pertor + $sum_keptor + $sum_sp_rektor + $sum_se_rektor +
        $sum_sk_dekan + $sum_per_mwa + $sum_kep_mwa + $sum_per_sau + $sum_kep_sau + 
        $sum_st_rektor + $sum_st_dekan + $sum_st_kepala_lembaga + $sum_st_kepala_biro;
        $sum_total = $sum_nasional + $sum_daerah + $sum_universitas;
        $datas = Data::with([
            'kategori',
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.data', ['datas' => $datas], compact('user', 'jumlah_user', 'kategori', 'nasional', 'daerah', 
        'universitas', 'status', 'unit_kerja', 'sum_nasional', 'sum_daerah', 
        'sum_universitas', 'sum_total'));
    }
    public function nasional(){
        $nasional = Data::where('kategori_id', '1')
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

        return view('admin.data-nasional', compact('nasional', 'user', 'jumlah_user'));
    }
    public function daerah(){
        $daerah = Data::where('kategori_id', '11')
        ->orWhere('kategori_id', '12')
        ->with([
            'status',
            'unit_kerja'
        ])->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.data-daerah', compact('daerah', 'user', 'jumlah_user'));
    }
    public function universitas(){
        $universitas = Data::where('kategori_id', '13')
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

        return view('admin.data-universitas', compact('universitas', 'user', 'jumlah_user'));
    }
    public function create(){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.data-create', compact('kategori', 'status', 'unit_kerja', 'user', 'jumlah_user'));
    }
    public function edit($id){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        $data = Data::find($id);
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();

        return view('admin.data-edit', compact('kategori', 'status', 'data', 'user', 'jumlah_user'));
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
            'rekomendasi'=>'required',
            'unit_kerja_id' => 'required',
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
            'rekomendasi'=>'required',
        ]);

        $datas = Data::find($id);

        if($request->file_upload){

        $fileUpload = $request->file_upload;
        $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
        $fileUpload->storeAs('public/file', $originalFileUpload);

        $data ['file_upload'] = $originalFileUpload;

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
