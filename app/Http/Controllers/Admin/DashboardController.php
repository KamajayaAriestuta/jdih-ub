<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Unit_Kerja;
use App\Models\User;
use App\Models\Notifications;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Notifications\UserFollowNotification;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{
    public function index(){
        $pertor = Produk::where('kategori_id', '1')->count();
        $perMWA = Produk::where('kategori_id', '2')->count();
        $perSAU = Produk::where('kategori_id', '3')->count();
        $produk = Produk::latest()->with(['kategori'])->paginate(3);
        $kategori = Kategori::all();
        $total = $pertor + $perMWA + $perSAU;

        return view('admin.dashboard', compact('pertor', 'perMWA', 'perSAU', 'produk', 'kategori', 'total'));
        
    }

    public function profil(){
        $user= User::find(1);
        return view('admin.profil', compact('user'));
    }

    public function update(Request $request, $user_id){

        $user = $request->except('_token');
        $request->validate([
            'name'=>'string',
            'email'=>'email',
            'password'=>'string',
            'phone_number'=>'string',
            'avatar'=>'image|mimes:img,jpeg,jpg,png',
            'role'=>'admin',
            'unit_kerja_id'=>'string',
        ]);

        $data = User::find($user_id);

        if ($request->avatar){
            $fileUpload = $request->avatar;
            $originalFileUpload = Str::random(10).$fileUpload->getClientOriginalName();
            $fileUpload->storeAs('public/file', $originalFileUpload);
            $user['avatar'] = $originalFileUpload;
        } 

        $data->update($user);
        return redirect()->route('admin.profil')->with('success', 'Profil Diperbarui');
    }
}
