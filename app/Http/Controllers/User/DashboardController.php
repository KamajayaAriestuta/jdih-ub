<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Berita;
use App\Models\Visit;
use App\Models\Raper;
use App\Models\Instruksi;
use App\Models\Edaran;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request){
        $pertor = Produk::where('kategori_id', '1')->count();
        $perMWA = Produk::where('kategori_id', '2')->count();
        $perSAU = Produk::where('kategori_id', '3')->count();
        $produk = Produk::orderBy('tanggal_ditetapkan', 'desc')
        ->with(['kategori'])
        ->paginate(5);
        $produk_terpopuler = Produk::orderBy('counter', 'desc')
        ->with(['kategori'])
        ->paginate(5);
        $berita = Berita::latest()->paginate(3);
        $kategori = Kategori::all();
        return view('user.dashboard', compact('pertor', 'perMWA', 'perSAU', 'produk', 'berita', 'kategori', 'produk_terpopuler'));
    }
    public function infografis(){
        $kategori = Kategori::all();
        return view('user.infografis', compact('kategori'));
    }
    public function raper(){
        $raper = Raper::orderBy('updated_at', 'desc')->with(['kategori'])->get();
        $kategori = Kategori::all();
        return view('user.rapertor', compact('kategori', 'raper'));
    }

    public function instruksi(){
        $instruksi = Instruksi::orderBy('tanggal_ditetapkan', 'desc')->get();
        $kategori = Kategori::all();   
        return view('user.instruksi', compact('kategori', 'instruksi'));
    }
    public function edaran(){
        $edaran = Edaran::orderBy('tahun', 'desc')->get();
        $kategori = Kategori::all();   
        return view('user.edaran', compact('kategori', 'edaran'));
    }
    
    public function kontak(){
        $kategori = Kategori::all();
        return view('user.kontak', compact('kategori'));
    }
    public function tentang(){
        $kategori = Kategori::all();
        return view('user.tentang', compact('kategori'));
    }
    public function per2010(){
        $produk = Produk::where('tahun', '2010')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2010')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2010', compact('produk', 'kategori', 'data_pagination'));
        
    }
    public function per2011(){
        $produk = Produk::where('tahun', '2011')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2011')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2011', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2012(){
        $produk = Produk::where('tahun', '2012')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2012')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2012', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2013(){
        $produk = Produk::where('tahun', '2013')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2013')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2013', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2014(){
        $produk = Produk::where('tahun', '2014')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2014')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2014', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2015(){
        $produk = Produk::where('tahun', '2015')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2015')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2015', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2016(){
        $produk = Produk::where('tahun', '2016')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2016')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2016', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2017(){
        $produk = Produk::where('tahun', '2017')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2017')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2017', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2018(){
        $produk = Produk::where('tahun', '2018')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2018')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2018', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2019(){
        $produk = Produk::where('tahun', '2019')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2019')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2019', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2020(){
        $produk = Produk::where('tahun', '2020')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2020')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2020', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2021(){
        $produk = Produk::where('tahun', '2021')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2021')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2021', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2022(){
        $produk = Produk::where('tahun', '2022')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2022')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2022', compact('produk', 'kategori', 'data_pagination'));
    }
    public function per2023(){
        $produk = Produk::where('tahun', '2023')->orderBy('tanggal_ditetapkan', 'desc')->paginate(10);
        $data_pagination = Produk::where('tahun', '2023')->paginate(10);
        $kategori = Kategori::all();
        return view('user.per2023', compact('produk', 'kategori', 'data_pagination'));
    }
}
