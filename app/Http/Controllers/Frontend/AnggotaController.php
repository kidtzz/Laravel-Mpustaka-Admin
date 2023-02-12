<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    //
    public function index(){
        $data = anggota::select('id','first_name','last_name','email','image','tgl_lahir','nomor_phone','alamat','daerah','jabatan','jenis_kelamin')->get();
        return view('pages.anggota.anggota',['att_anggota'=>$data]);
    }

    public function viewAddAnggota(){
        return view('pages.anggota.add-anggota');   
    }

    public function simpanAnggota(Request $request){
        DB::table('anggota')->insert([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'image'=> $request->image,
            'tgl_lahir'=> $request->tgl_lahir,
            'nomor_phone'=> $request->nomor_phone,
            'alamat'=> $request->alamat,
            'daerah'=> $request->daerah,
            'jabatan'=> $request->jabatan,
            'jenis_kelamin'=> $request->jenis_kelamin,
        ]);
        toastr()->success('anggota Berhasil Ditambahkan');
        return redirect('anggota');
    }


    public function getAnggotaId($id){
        $att_anggota = anggota::find($id);
        return view('pages.anggota.update-anggota',compact('att_anggota'));
    }
    
    public function updateAnggota(Request $request, $id){
        $att_anggota = anggota::find($id);
        $att_anggota->update($request->all());
        toastr()->warning('Anggota Berhasil Di Update');
        return redirect('anggota');
    }

    public function deleteAnggota($id){
        $data = anggota::find($id);
        $data->delete();
        toastr()->error('Anggota Berhasil Didelete');
        return redirect('anggota');
    }
}
