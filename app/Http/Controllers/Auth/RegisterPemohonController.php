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
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMail;
use Illuminate\Auth\Events\Verified;


class RegisterPemohonController extends Controller
{

    public function register(){
        $unit_kerja = Unit_Kerja::all();
        return view('auth.pemohon-create', compact('unit_kerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'password' => 'required|min:6',
            'phone_number' => 'required', 
            'avatar' => 'nullable|file|mimes:png,jpg,jpeg',
            'unit_kerja_id' => 'required',
            'unit_kerja_2_id' => '',
            'unit_kerja_3_id' => '',
        ]);

        $isEmailExist = User::where('email', $request->email)->exists();

        if ($isEmailExist) {
            return back()->withErrors([
                'email' => 'Email is Already Exist'
            ])->withInput();
        }

        $data = $request->except('_token', 'approve');
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'pemohon';
        $data['status'] = '2';

        $user = User::create($data);
        Notification::send($user, new UserFollowNotification($request->name));
        $user->sendEmailVerificationNotification();
        return view('auth.verify');
    }
    
    public function verifyEmail(Request $request)
    {
        if ($request->route('id') == $request->user()->getKey() &&
            $request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
    
        return view('auth.auth');    
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
