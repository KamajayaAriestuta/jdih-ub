<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\LoginController;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function () {
     Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    
    Route::group(['prefix' => 'data'], function()
    {
        Route::get('/', [DataController::class, 'index'])->name('admin.data');
        Route::get('/create', [DataController::class, 'create'])->name('admin.data.create');
        Route::post('/store', [DataController::class, 'store'])->name('admin.data.store');
        Route::get('/edit/{id}', [DataController::class, 'edit'])->name('admin.data.edit');
        Route::put('/update/{id}', [DataController::class, 'update'])->name('admin.data.update');
        Route::delete('/delete/{id}', [DataController::class, 'delete'])->name('admin.data.delete');
    });
    
});
