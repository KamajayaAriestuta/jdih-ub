<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    
    Route::group(['prefix' => 'data'], function()
    {
        Route::get('/', [DataController::class, 'index'])->name('admin.data');
        Route::get('/create', [DataController::class, 'create'])->name('admin.data.create');
    });
    
});
