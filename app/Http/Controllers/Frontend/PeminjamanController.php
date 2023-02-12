<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    //
    public function index(){
        $list_nama = DB::table('anggota')->get();
        $list_buku = DB::table('buku')->get();
        return view('pages.transaksi.peminjaman', compact('list_nama','list_buku'));
    }

    public function addPeminjaman(Request $request){
        DB::table('peminjaman')->insert([
            'no_pinjam'=>$request->no_pinjam,
            'nama_pinjam'=>$request->nama_pinjam,
            'judul_buku'=>$request->judul_buku,
            'tanggal_pinjam'=>$request->tanggal_pinjam,
            'tanggal_kembali'=>$request->tanggal_kembali,
        ]);
        toastr()->success('Data Peminjam berhasil ditambahkan');
        return redirect('add-peminjaman');
    }
}
