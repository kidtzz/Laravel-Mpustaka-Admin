<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    //
    public function index(){
        $data = berita::select('id','judul','kategori','deskripsi','gambar','user')->get();
        return view("pages.berita.berita",['dataBerita'=> $data]);
    }
    public function addBerita(){
        return view('pages.berita.add-berita');
    }

    public function storeBerita(Request $request){
        $request->validate([
            'judul'=>'required|min:2',
            'gambar'=>'required|mimes:jpg,jpeg,png',
        ],[
            'judul.required'=>'judul tidak boleh kosong',
            'gambar.required'=>'format gambar harus jpg, jpeg, png',
        ]);

        $file_name = $request->gambar->getClientOriginalName();
        $img = $request->gambar->storeAs('thumbnail/berita',$file_name);

        DB::table('berita')->insert([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'kategori'=> $request->kategori,
            'gambar'=> $img,
            'user'=> $request->user,
        
        ]); 
        return redirect('berita')-> with('message','berita added');
    }

    public function getidBerita($id){
        $att_berita = berita::find($id);
        return view('pages.berita.update-berita',compact('att_berita'));
    }

    public function updateBerita(Request $request, $id){
        $att_berita = berita::find($id);
        $att_berita->update($request->all());
        return redirect('berita')->with('message-update','Data berhasil di Update');
    }

    public function deleteBerita($id){
        $data = berita::find($id);
        $data->delete();
        return redirect('berita')->with('message-delete','Data berhasil di delete');
    }
}
