<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class PemohonController extends Controller
{
    public function index(){
        $datas = Data::with([
            'kategori',
            'status'
        ])->get();
        return view('pemohon.dashboard', ['datas' => $datas]);
    }
}
