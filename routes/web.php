<?php

use Illuminate\Support\Facades\Route;
//Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\RegisterPemohonController;
//Admin
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PemohonController as AdminPemohonController;
use App\Http\Controllers\Admin\UnitKerjaController;
//Pemohon
use App\Http\Controllers\Pemohon\DashboardController as PemohonDashboardController;
use App\Http\Controllers\Pemohon\PemohonController;
//User
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProdukController;
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

//Route::get('produkhukum', [ProdukController::class, 'index'])->name('produk.hukum');
Route::get('cari_produk', [ProdukController::class, 'index'])->name('cari_produk');
Route::post('cari_produk', [ProdukController::class, 'search'])->name('cari_produk');
Route::get('hasil_pencarian', [ProdukController::class, 'search'])->name('hasil_pencarian');


Route::get('/jenis_produk/{id}', [JenisProdukController::class, 'insert'])->name('jenis_produk');
Route::get('/detail_produk/{id}', [DetailProdukController::class, 'detail'])->name('detail_produk');
Route::get('/status_produk/{id}', [JenisProdukController::class, 'status'])->name('status_produk');
Route::get('/unit_kerja/{id}', [JenisProdukController::class, 'unit_kerja'])->name('unit_kerja');



Route::get('/calendar', function () {
     return view('admin.calendar');
});




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


//Halaman Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'user.auth:admin']], function(){
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('profil', [AdminDashboardController::class, 'profil'])->name('admin.profil');
    // Route::get('/edit/profil{id}', [AdminDashboardController::class, 'edit'])->name('admin.profil.edit');
    Route::put('/update/profil/{user_id}', [AdminDashboardController::class, 'update'])->name('admin.profil.update');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/kategori', [DataController::class, 'kategori'])->name('kategori');
    Route::get('/approved', [RegisterPemohonController::class, 'approved'])->name('approved');
    Route::get('/status/{id}', [RegisterPemohonController::class, 'status'])->name('status');
    Route::get('/notify', [AdminDashboardController::class, 'notify'])->name('pemohon.notify');
    Route::get('/maskared/{id}', [AdminDashboardController::class, 'maskared'])->name('pemohon.maskared');












    //Halaman Admin Bagian Data
    Route::group(['prefix' => 'data'], function()
        {
            Route::get('/', [DataController::class, 'index'])->name('admin.data');
            Route::get('/create', [DataController::class, 'create'])->name('admin.data.create');
            Route::post('/store', [DataController::class, 'store'])->name('admin.data.store');
            Route::get('/edit/{id}', [DataController::class, 'edit'])->name('admin.data.edit');
            Route::put('/update/{id}', [DataController::class, 'update'])->name('admin.data.update');
            Route::delete('/delete/{id}', [DataController::class, 'delete'])->name('admin.data.delete');
            Route::get('/nasional', [DataController::class, 'nasional'])->name('admin.data.nasional');
            Route::get('/daerah', [DataController::class, 'daerah'])->name('admin.data.daerah');
            Route::get('/universitas', [DataController::class, 'universitas'])->name('admin.data.universitas');
        
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
        });
    
    });


Route::group(['prefix' => 'pemohon', 'middleware' => ['auth', 'user.auth:pemohon']], function(){
    Route::get('/', [PemohonController::class, 'index'])->name('pemohon.dashboard');
    Route::get('profil', [PemohonDashboardController::class, 'profil'])->name('pemohon.profil');
    Route::put('/update/profil/{user_id}', [PemohonDashboardController::class, 'update'])->name('pemohon.profil.update');

});



