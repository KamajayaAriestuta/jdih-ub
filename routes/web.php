<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Pemohon\PemohonController;
use App\Http\Controllers\Pemohon\RegisterController;
use App\Http\Controllers\Pemohon\LoginController as PemohonLoginController;

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


 Route::get('/', function () {
     return view('index');
});

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin.auth:admin']], function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::group(['prefix' => 'data'], function()
    {
        Route::get('/', [DataController::class, 'index'])->name('admin.data');
        Route::get('/pemohon', [DataController::class, 'pemohon'])->name('admin.pemohon');
        Route::get('/create', [DataController::class, 'create'])->name('admin.data.create');
        Route::post('/store', [DataController::class, 'store'])->name('admin.data.store');
        Route::get('/edit/{id}', [DataController::class, 'edit'])->name('admin.data.edit');
        Route::put('/update/{id}', [DataController::class, 'update'])->name('admin.data.update');
        Route::delete('/delete/{id}', [DataController::class, 'delete'])->name('admin.data.delete');
        Route::delete('/delete/pemohon/{id}', [DataController::class, 'pemohon_delete'])->name('admin.pemohon.delete');
    });
    Route::get('/kategori', [DataController::class, 'kategori'])->name('user.kategori');
    });



//REGISTER PEMOHON
Route::get('pemohon/register', [RegisterController::class, 'register'])->name('pemohon.register');
Route::post('/pemohon/register', [RegisterController::class, 'store'])->name('pemohon.register.store');



Route::group(['prefix' => 'pemohon', 'middleware' => ['auth', 'admin.auth:pemohon']], function(){
    Route::view('/', 'pemohon.dashboard')->name('pemohon.dashboard');
});
