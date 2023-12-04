<?php

use Illuminate\Support\Facades\Route;
//Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\RegisterPemohonController;
//Admin
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PemohonController as AdminPemohonController;
use App\Http\Controllers\Admin\UnitKerjaController;
//User
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProdukController as ProdukControllerUser;
use App\Http\Controllers\User\JenisProdukController;
use App\Http\Controllers\User\DetailProdukController;

use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes(['verify' => true]);

Route::get('/', [DashboardController::class, 'index'])->name('halaman_utama');
Route::get('/infografis', [DashboardController::class, 'infografis'])->name('infografis');
Route::get('/rancangan', [DashboardController::class, 'raper'])->name('rapertor');
Route::get('/kontak', [DashboardController::class, 'kontak'])->name('kontak');
Route::get('/tentang', [DashboardController::class, 'tentang'])->name('tentang');


Route::get('cari_produk', [ProdukControllerUser::class, 'index'])->name('cari_produk');
Route::post('cari_produk', [ProdukControllerUser::class, 'search'])->name('cari_produk');
Route::get('hasil_pencarian', [ProdukControllerUser::class, 'search'])->name('hasil_pencarian');
Route::get('produk', [ProdukControllerUser::class, 'produk'])->name('produk');

Route::get('/per2010', [DashboardController::class, 'per2010'])->name('per2010');
Route::get('/per2011', [DashboardController::class, 'per2011'])->name('per2011');
Route::get('/per2012', [DashboardController::class, 'per2012'])->name('per2012');
Route::get('/per2013', [DashboardController::class, 'per2013'])->name('per2013');
Route::get('/per2014', [DashboardController::class, 'per2014'])->name('per2014');
Route::get('/per2015', [DashboardController::class, 'per2015'])->name('per2015');
Route::get('/per2016', [DashboardController::class, 'per2016'])->name('per2016');
Route::get('/per2017', [DashboardController::class, 'per2017'])->name('per2017');
Route::get('/per2018', [DashboardController::class, 'per2018'])->name('per2018');
Route::get('/per2019', [DashboardController::class, 'per2019'])->name('per2019');
Route::get('/per2020', [DashboardController::class, 'per2020'])->name('per2020');
Route::get('/per2021', [DashboardController::class, 'per2021'])->name('per2021');
Route::get('/per2022', [DashboardController::class, 'per2022'])->name('per2022');
Route::get('/per2023', [DashboardController::class, 'per2023'])->name('per2023');


Route::get('/jenis_produk/{id}', [JenisProdukController::class, 'insert'])->name('jenis_produk');
Route::get('/detail_produk/{id}', [DetailProdukController::class, 'detail'])->name('detail_produk');
Route::get('/detail_berita/{id}', [DetailProdukController::class, 'berita'])->name('detail_berita');
Route::get('/berita_hukum', [DetailProdukController::class, 'semua_berita'])->name('semua_berita');
Route::get('/status_produk/{id}', [JenisProdukController::class, 'status'])->name('status_produk');
Route::get('/unit_kerja/{id}', [JenisProdukController::class, 'unit_kerja'])->name('unit_kerja');


//Halaman Login
Auth::routes(['verify' => true]);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('pending', [LoginController::class, 'pending'])->name('pemohon.pending');

//Register Admin
Route::get('admin/register', [RegisterAdminController::class, 'register'])->name('admin.register');
Route::post('admin/register', [RegisterAdminController::class, 'store'])->name('admin.register.store');

//Register Pemohon
Route::get('pemohon/register', [RegisterPemohonController::class, 'register'])->name('pemohon.register');
Route::post('pemohon/register', [RegisterPemohonController::class, 'store'])->name('pemohon.register.store');

Route::get('email/verify/{id}', [RegisterPemohonController::class, 'verifyEmail'])->name('verification.verify')->middleware('auth', 'signed');


//Halaman Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'user.auth:admin']], function(){
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('profil', [AdminDashboardController::class, 'profil'])->name('admin.profil');
    // Route::get('/edit/profil{id}', [AdminDashboardController::class, 'edit'])->name('admin.profil.edit');
    Route::put('/update/profil/{user_id}', [AdminDashboardController::class, 'update'])->name('admin.profil.update');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/kategori', [ProdukController::class, 'kategori'])->name('kategori');
    Route::get('/approved', [RegisterPemohonController::class, 'approved'])->name('approved');
    Route::get('/status/{id}', [RegisterPemohonController::class, 'status'])->name('status');
    Route::get('/notify', [AdminDashboardController::class, 'notify'])->name('pemohon.notify');
    Route::get('/maskared/{id}', [AdminDashboardController::class, 'maskared'])->name('pemohon.maskared');
    
    //Halaman Admin Bagian Data
    Route::group(['prefix' => 'produk'], function()
        {
            Route::get('/', [ProdukController::class, 'index'])->name('admin.produk');
            Route::get('/create', [ProdukController::class, 'create'])->name('admin.produk.create');
            Route::post('/store', [ProdukController::class, 'store'])->name('admin.produk.store');
            Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('admin.produk.edit');
            Route::put('/update/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');
            Route::delete('/delete/{id}', [ProdukController::class, 'delete'])->name('admin.produk.delete');
            Route::get('/nasional', [ProdukController::class, 'nasional'])->name('admin.produk.nasional');
            Route::get('/daerah', [ProdukController::class, 'daerah'])->name('admin.produk.daerah');
            Route::get('/universitas', [ProdukController::class, 'universitas'])->name('admin.produk.universitas');
        
        });

 		 
        Route::group(['prefix' => 'raper'], function()
        {
            Route::get('/', [ProdukController::class, 'raper'])->name('admin.raper');
            Route::get('/create', [ProdukController::class, 'raper_create'])->name('admin.raper.create');
            Route::post('/store', [ProdukController::class, 'raper_store'])->name('admin.raper.store');
            Route::get('/edit/{id}', [ProdukController::class, 'raper_edit'])->name('admin.raper.edit');
            Route::put('/update/{id}', [ProdukController::class, 'raper_update'])->name('admin.raper.update');
            Route::delete('/delete/{id}', [ProdukController::class, 'raper_delete'])->name('admin.raper.delete');            
        });
        Route::group(['prefix' => 'instruksi'], function()
        {
            Route::get('/', [ProdukController::class, 'instruksi'])->name('admin.instruksi');
            Route::get('/create', [ProdukController::class, 'instruksi_create'])->name('admin.instruksi.create');
            Route::post('/store', [ProdukController::class, 'instruksi_store'])->name('admin.instruksi.store');
            Route::get('/edit/{id}', [ProdukController::class, 'instruksi_edit'])->name('admin.instruksi.edit');
            Route::put('/update/{id}', [ProdukController::class, 'instruksi_update'])->name('admin.instruksi.update');
            Route::delete('/delete/{id}', [ProdukController::class, 'instruksi_delete'])->name('admin.instruksi.delete');            
        });

        Route::group(['prefix' => 'berita'], function()
        {
            Route::get('/', [BeritaController::class, 'index'])->name('admin.berita');
            Route::get('/create', [BeritaController::class, 'create'])->name('admin.berita.create');
            Route::post('/store', [BeritaController::class, 'store'])->name('admin.berita.store');
            Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
            Route::put('/update/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
            Route::delete('/delete/{id}', [BeritaController::class, 'delete'])->name('admin.berita.delete');        
        });
    
    });





