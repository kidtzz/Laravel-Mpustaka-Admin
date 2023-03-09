<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    //
    public function getBerita(){
        $berita = berita::select('id','judul','kategori','deskripsi','gambar','user','created_at')->get();
        return response()->json([
            'data' => $berita
        ]);
    }
    public function deleteBerita($id){
        $data = berita::find($id);
        $resultDel = $data->delete();
        if($resultDel){
            return ["Data Berita Berhasil Di Delete!"];
        }else{
            return ["Gagal Delete Berita!"];
        }
    }

    public function postBerita(Request $request){

        $validator = Validator::make($request->all(), [
            'gambar'     => 'required',
            'judul'     => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $file_name = $request->gambar;
        // $img = $request->gambar->storeAs('thumbnail/berita',$file_name);

        $postBerita = DB::table('berita')->insert([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'kategori'=> $request->kategori,
            'gambar'=> $file_name,
            'user'=>  'admin',
        ]); 

        if($postBerita){
            return ["Data Berita Berhasil Ditambahkan!"];
        }else{
            return ["gagal Masuk !"];
        }
    }

    public function updateBerita(Request $request, $id){
        $att_berita = berita::find($id);
        $resultUpdate = $att_berita->update($request->all());
        if($resultUpdate){
            return ["Data Berita Berhasil Di Update!"];
        }else{
            return ["Gagal Update !"];
        }
    }
}
