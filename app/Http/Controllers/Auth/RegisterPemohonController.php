<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Unit_Kerja;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\UserFollowNotification;
use Illuminate\Support\Facades\Notification;


class RegisterPemohonController extends Controller
{

    public function register(){
        $unit_kerja = Unit_Kerja::all();
        return view('auth.pemohon-create', compact('unit_kerja'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'password' => 'required|min:6',
            'phone_number' => 'required', 
            'avatar' => 'nullable|file|mimes:png, jpg, jpeg',
            'unit_kerja_id' => 'required',
        ]);

        $data = $request->except('_token', 'approve');

        $isEmailExist = User::where('email', $request->email)->exists();


        if($isEmailExist){
            return back()->withErrors([
                'email' => 'Email is Already Exist'
            ])->withInput();
        }
        $data['password']= Hash::make($request->password);
        $data['role'] = 'pemohon';
        $data['status'] = '2';
        $user = User::all();
        User::create($data);
        Notification::send($user, new UserFollowNotification($request->name)); 
        return redirect()->route('login');
        
    }

    public function approved(){
        $data_pemohon = User::where('role', 'pemohon')->with([
            'unit_kerja'
        ])->latest()->get();
        $user= User::find(1);
        $jumlah_user = $user->notifications->count();
        return view('admin.mailbox', compact('data_pemohon', 'user', 'jumlah_user'));
    }

    public function status(Request $request, $id){
        $data = User::find($id);

        if($data->status == 1){
            $data->status = '0';
        }
        else{
            $data->status = '1';
        }
        $data->save();
        return Redirect::to('admin/approved')->with('messages', $data->name. ' status has been changes');
    }

    public function pemohon_approved(Request $request, $id){
        $data_pemohon = User::where('role', 'pemohon')->with([
            'unit_kerja'
        ])->get();

       $data['approve'] = '1';


        User::find($id)->update($data);
        return view('admin.mailbox', compact('data_pemohon'));
    }

    public function pemohon_denied(Request $request, $id){
        $data_pemohon = User::where('role', 'pemohon')->with([
            'unit_kerja'
        ])->get();

        $data = $request->except('_token');
        $data['approve'] = '0';
        User::find($id)->update($data);
        return view('admin.mailbox', compact('data_pemohon'));
    }

}
