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
        $data = buku::select('id','kode_buku','judul','deskripsi','pengarang','penerbit','tahunTerbit','gambar','jmlhHalaman')->get(); 
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
        $number = mt_rand(1000, 9999);
        $kodeBuku = 'BUK'.$number;
        DB::table('buku')->insert([
            'kode_buku'=>$kodeBuku,
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'pengarang'=> $request->pengarang,
            'penerbit'=> $request->penerbit,
            'jmlhHalaman'=> $request->jmlhHalaman,
            'gambar'=> $img,
            'tahunTerbit'=> $request->tahunTerbit,
        ]); 
        toastr()->success('Buku Berhasil Ditambahkan');
        return redirect('buku')-> with('message','buku added');

    }
    public function getidBuku($id){
        $att_buku = buku::find($id);
        return view('pages.buku.update-buku',compact('att_buku'));
    }
    
    public function updateBuku(Request $request, $id){
        $att_buku = buku::find($id);
        $att_buku->update($request->all());
        toastr()->warning('Buku Berhasil DiUpdate');
        return redirect('buku')->with('message-update','Data berhasil di Update');
    }

    public function deleteBuku($id){
        $data = buku::find($id);
        $data->delete();
        toastr()->error('Buku Berhasil Didelete');
        return redirect('buku')->with('message-delete','Data berhasil di delete');
    }

}
