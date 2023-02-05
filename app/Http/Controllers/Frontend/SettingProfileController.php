<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SettingProfileController extends Controller
{
    //
    public function getProfil($id){
        $user_profil = User::find($id);
        return view('pages.auth.setting-profile',compact('user_profil'));
    }

    public function updateProfil(Request $request, $id){ 
        $request->validate([
            'gambar'=>'required|mimes:jpg,jpeg,png',
        ],[
            'gambar.required'=>'format gambar harus jpg, jpeg, png',
        ]);

        $file_name = $request->gambar->getClientOriginalName();
        $profile = $request->gambar->storeAs('thumbnail/profile',$file_name);

        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gambar = $profile;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->nomor_phone = $request->nomor_phone;
        $user->alamat = $request->alamat;
        $user->daerah = $request->daerah;
        $user->save();
        return redirect('dashboard')->with('update-profile','Profil berhasil di Update');
    }
}
