<?php

use Illuminate\Support\Facades\Route;
//Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\RegisterPemohonController;
//Superadmin
use App\Http\Controllers\Superadmin\DashboardController as SuperAdminDashboardController;
use App\Http\Controllers\Superadmin\ProdukController as SuperadminProdukController;
//Admin
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PemohonController as AdminPemohonController;
use App\Http\Controllers\Admin\UnitKerjaController;
//Pemohon
use App\Http\Controllers\Pemohon\DashboardController as PemohonDashboardController;
use App\Http\Controllers\Pemohon\PemohonController;
//User
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProdukController as ProdukControllerUser;
use App\Http\Controllers\User\JenisProdukController;
use App\Http\Controllers\User\DetailProdukController;



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

//Halaman User
// Route::get('/', function () {
//      return view('user.dashboard');
// });





Route::get('/', [DashboardController::class, 'index'])->name('halaman_utama');
Route::get('/kontak', [DashboardController::class, 'kontak'])->name('kontak');
Route::get('/tentang', [DashboardController::class, 'tentang'])->name('tentang');


Route::get('cari_produk', [ProdukControllerUser::class, 'index'])->name('cari_produk');
Route::post('cari_produk', [ProdukControllerUser::class, 'search'])->name('cari_produk');
Route::get('hasil_pencarian', [ProdukControllerUser::class, 'search'])->name('hasil_pencarian');
Route::get('produk', [ProdukControllerUser::class, 'produk'])->name('produk');



Route::get('/jenis_produk/{id}', [JenisProdukController::class, 'insert'])->name('jenis_produk');
Route::get('/detail_produk/{id}', [DetailProdukController::class, 'detail'])->name('detail_produk');
Route::get('/detail_berita/{id}', [DetailProdukController::class, 'berita'])->name('detail_berita');
Route::get('/berita_hukum', [DetailProdukController::class, 'semua_berita'])->name('semua_berita');
Route::get('/status_produk/{id}', [JenisProdukController::class, 'status'])->name('status_produk');
Route::get('/unit_kerja/{id}', [JenisProdukController::class, 'unit_kerja'])->name('unit_kerja');





//Halaman Login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('pending', [LoginController::class, 'pending'])->name('pemohon.pending');

//Register Admin
Route::get('admin/register', [RegisterAdminController::class, 'register'])->name('admin.register');
Route::post('admin/register', [RegisterAdminController::class, 'store'])->name('admin.register.store');

//Register Pemohon
Route::get('pemohon/register', [RegisterPemohonController::class, 'register'])->name('pemohon.register');
Route::post('pemohon/register', [RegisterPemohonController::class, 'store'])->name('pemohon.register.store');


//Halaman Superadmin
Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'user.auth:superadmin']], function(){
    Route::get('/', [SuperAdminDashboardController::class, 'index'])->name('superadmin.dashboard');
    Route::get('profil', [SuperAdminDashboardController::class, 'profil'])->name('superadmin.profil');
    Route::put('/update/profil/{user_id}', [SuperAdminDashboardController::class, 'update'])->name('superadmin.profil.update');
    Route::get('/logout', [LoginController::class, 'logout'])->name('superadmin.logout');
    Route::get('/admin', [SuperAdminDashboardController::class, 'admin'])->name('superadmin.admin');
    Route::get('admin/create', [SuperAdminDashboardController::class, 'tambah_admin'])->name('tambah.admin');
    Route::delete('admin/delete/{id}', [SuperAdminDashboardController::class, 'delete'])->name('superadmin.admin.delete');
    Route::post('admin/store', [SuperAdminDashboardController::class, 'store_admin'])->name('tambah.admin.store');
    Route::get('/approve/{id}', [SuperadminProdukController::class, 'approve'])->name('approve.produk');

    Route::group(['prefix' => 'produk'], function()
    {
        Route::get('/', [SuperadminProdukController::class, 'index'])->name('superadmin.produk');
        Route::get('/create', [SuperadminProdukController::class, 'create'])->name('superadmin.produk.create');
        Route::post('/store', [SuperadminProdukController::class, 'store'])->name('superadmin.produk.store');
        Route::get('/edit/{id}', [SuperadminProdukController::class, 'edit'])->name('superadmin.produk.edit');
        Route::put('/update/{id}', [SuperadminProdukController::class, 'update'])->name('superadmin.produk.update');
        Route::get('/nasional', [SuperadminProdukController::class, 'nasional'])->name('superadmin.produk.nasional');
        Route::get('/daerah', [SuperadminProdukController::class, 'daerah'])->name('superadmin.produk.daerah');
        Route::get('/universitas', [SuperadminProdukController::class, 'universitas'])->name('superadmin.produk.universitas');
    
    });
    
});



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

        Route::group(['prefix' => 'pemohon'], function()
        {
            Route::get('/', [AdminPemohonController::class, 'index'])->name('admin.pemohon');
            Route::get('/edit/{id}', [AdminPemohonController::class, 'edit'])->name('admin.pemohon.edit');
            Route::put('/update/{id}', [AdminPemohonController::class, 'update'])->name('admin.pemohon.update');
            Route::delete('/delete/{id}', [AdminPemohonController::class, 'delete'])->name('admin.pemohon.delete');
        });

        Route::group(['prefix' => 'unit'], function()
        {
            Route::get('/', [UnitKerjaController::class, 'index'])->name('admin.unit_kerja');
            Route::get('/create', [UnitKerjaController::class, 'create'])->name('unit_kerja.create');
            Route::post('/store', [UnitKerjaController::class, 'store'])->name('unit_kerja.store');
            Route::get('/unit/edit/{id}', [UnitKerjaController::class, 'edit'])->name('unit_kerja.edit');
            Route::put('/unit/update/{id}', [UnitKerjaController::class, 'update'])->name('unit_kerja.update');
            Route::delete('/delete/{id}', [UnitKerjaController::class, 'delete'])->name('admin.unit.delete');
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


Route::group(['prefix' => 'pemohon', 'middleware' => ['auth', 'user.auth:pemohon']], function(){
    Route::get('/', [PemohonDashboardController::class, 'index'])->name('pemohon.dashboard'); 
    Route::get('/produk', [PemohonController::class, 'produk'])->name('pemohon.produk'); 
    Route::get('profil', [PemohonDashboardController::class, 'profil'])->name('pemohon.profil');
    Route::put('/update/profil/{user_id}', [PemohonDashboardController::class, 'update'])->name('pemohon.profil.update');
    Route::get('/unit', [PemohonController::class, 'unit'])->name('pemohon.unit');
});



