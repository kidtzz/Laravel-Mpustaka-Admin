<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\buku;
use Illuminate\Support\Facades\DB;



class BukuController extends Controller
{
    //
    public function index(){
        $data = buku::select('id','judul','deskripsi','pengarang','penerbit','tahunTerbit','gambar','jmlhHalaman')->get(); 
        return view('pages.buku.buku',['bukuItem'=>$data]);
    }

    public function create(){
        return view('pages.buku.add-buku');
    }

    public function store(Request $request){
      
        $request->validate([
            'judul'=>'required|min:2',
            'gambar'=>'required|mimes:jpg,jpeg,png',
        ],[
            'judul.required'=>'judul tidak boleh kosong',
            'gambar.required'=>'format gambar harus jpg, jpeg, png',
        ]);

        $file_name = $request->gambar->getClientOriginalName();
        $img = $request->gambar->storeAs('thumbnail/buku',$file_name);
        
        DB::table('buku')->insert([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'pengarang'=> $request->pengarang,
            'penerbit'=> $request->penerbit,
            'jmlhHalaman'=> $request->jmlhHalaman,
            'gambar'=> $img,
            'tahunTerbit'=> $request->tahunTerbit,
        ]); 
        return redirect('buku')-> with('message','buku added');

    }
    public function getidBuku($id){
        $att_buku = buku::find($id);
        return view('pages.buku.update-buku',compact('att_buku'));
    }
    
    public function updateBuku(Request $request, $id){
        $att_buku = buku::find($id);
        $att_buku->update($request->all());
        return redirect('buku')->with('message-update','Data berhasil di Update');
    }

    public function deleteBuku($id){
        $data = buku::find($id);
        $data->delete();
        return redirect('buku')->with('message-delete','Data berhasil di delete');
    }

}
