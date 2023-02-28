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
        $data = anggota::select('id','name','email','image','tgl_lahir','nomor_phone','alamat','daerah','jabatan','jenis_kelamin')->get();
        return view('pages.anggota.anggota',['att_anggota'=>$data]);
    }

    public function viewAddAnggota(){
        return view('pages.anggota.add-anggota');   
    }

    public function simpanAnggota(Request $request){
        $request->validate([
            'name'=>'required|min:2',
            'email'=>'required|string|email|',
        ],[
            'name.required'=> 'name tidak boleh kosong',
        ]);

        $file_name = $request->image->getClientOriginalName();
        $anggota = $request->image->storeAs('thumbnail/anggota',$file_name);

        DB::table('anggota')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'image'=> $anggota,
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
