<?php

namespace App\Http\Controllers\Pemohon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PemohonController extends Controller
{
    public function index(){
        $identitas = auth()->user()->unit_kerja_id;
        $data = Data::where('unit_kerja_id', $identitas)->with([
            'kategori',
            'status'
        ])->get();

        $identitas = auth()->user()->id;
        return view('pemohon.dashboard', ['data' => $data]);
    }

}
