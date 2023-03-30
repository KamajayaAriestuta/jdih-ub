<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request){
        $kategori = Kategori::all();
        $status = Status::all();
        $unit_kerja = Unit_Kerja::all();
        return view('user.dashboard', compact('kategori', 'status', 'unit_kerja'));

    }
    public function kategori(){
        $kategori = Kategori::all();
        $status = Status::all();
        return view('user.layouts.navbar', compact('kategori', 'status'));
    }
}
