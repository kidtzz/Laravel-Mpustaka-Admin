<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\peminjaman;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    //
    public function index(){
        $list_nama = DB::table('anggota')->get();
        $list_buku = DB::table('buku')->get();
        return view('pages.transaksi.add-peminjam', compact('list_nama','list_buku'));
    }
    public function viewPeminjam(){
        $list_peminjam = peminjaman::select('no_pinjam','nama_pinjam','judul_buku','tanggal_pinjam','tanggal_kembali','submit_by')->get();
        return view('pages.transaksi.data-peminjam',compact('list_peminjam'));
    }
    public function viewKembali(){
        $list_kembali = peminjaman::select('no_pinjam','nama_pinjam','judul_buku','tanggal_pinjam','tanggal_kembali')->get();
        return view('pages.transaksi.data-kembali',compact('list_kembali'));
    }

    public function addPeminjaman(Request $request){
        $number = mt_rand(1000, 9999);
        $kodePinjam = 'PIN'.$number;
        DB::table('peminjaman')->insert([
            'no_pinjam'=>$kodePinjam,
            'nama_pinjam'=>$request->nama_pinjam,
            'judul_buku'=>$request->judul_buku,
            'tanggal_pinjam'=>$request->tanggal_pinjam,
            'tanggal_kembali'=>$request->tanggal_kembali,
            'submit_by'=>$request->submit_by,
        ]);
        toastr()->success('Data Peminjam berhasil ditambahkan');
        return redirect('add-peminjaman');
    }
}
