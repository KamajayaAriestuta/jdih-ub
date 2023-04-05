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






//Halaman Login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');

//Register Admin
Route::get('admin/register', [RegisterAdminController::class, 'register'])->name('admin.register');
Route::post('admin/register', [RegisterAdminController::class, 'store'])->name('admin.register.store');

//Register Pemohon
Route::get('pemohon/register', [RegisterPemohonController::class, 'register'])->name('pemohon.register');
Route::post('pemohon/register', [RegisterPemohonController::class, 'store'])->name('pemohon.register.store');

//Halaman Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'user.auth:admin']], function(){
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/kategori', [DataController::class, 'kategori'])->name('kategori');

    //Halaman Admin Bagian Data
    Route::group(['prefix' => 'data'], function()
        {
            Route::get('/', [DataController::class, 'index'])->name('admin.data');
            Route::get('/pemohon', [AdminPemohonController::class, 'index'])->name('admin.pemohon');
            Route::get('/create', [DataController::class, 'create'])->name('admin.data.create');
            Route::post('/store', [DataController::class, 'store'])->name('admin.data.store');
            Route::get('/edit/{id}', [DataController::class, 'edit'])->name('admin.data.edit');
            Route::put('/update/{id}', [DataController::class, 'update'])->name('admin.data.update');
            Route::delete('/delete/{id}', [DataController::class, 'delete'])->name('admin.data.delete');
            Route::delete('/delete/pemohon/{id}', [DataController::class, 'pemohon_delete'])->name('admin.pemohon.delete');
        });
    
    });

Route::group(['prefix' => 'pemohon', 'middleware' => ['auth', 'user.auth:pemohon']], function(){
    Route::get('/', [PemohonController::class, 'index'])->name('pemohon.dashboard');
});



