<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function kategori(){
        $kategori = Kategori::all();
        $status = Status::all();
        return view('user.layouts.navbar', compact('kategori', 'status'));
    }
}
