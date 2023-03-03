<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\kembaliPinjam;
use App\Models\peminjaman;
use Carbon\Carbon;
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
        $list_peminjam = peminjaman::select('id','no_pinjam','nama_pinjam','judul_buku','tanggal_pinjam','tanggal_kembali','submit_by')->get();
        $now_date = Carbon::now();
        return view('pages.transaksi.data-peminjam',compact('list_peminjam','now_date'));
    }
    public function viewKembali(){
        $list_kembali = kembaliPinjam::select('no_pinjam','nama_pinjam','judul_buku','tanggal_pinjam','tanggal_kembali','status')->get();
        return view('pages.transaksi.data-kembali',compact('list_kembali'));
    }

    public function addPeminjaman(Request $request){
        $number = mt_rand(100, 999);
        $kodePinjam = 'PIN00'.$number;
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

    public function perpanjang(Request $request, $id){
        $att_peminjam = peminjaman::find($id);
        $att_peminjam->update($request->all());
        toastr()->success('Berhasil di Perpanjang');
        return redirect('data-peminjam');
    }

    public function getIdpeminjam($id){
        peminjaman::find($id);
        return view('pages.transaksi.data-peminjam');
    }

    public function deletePeminjam($id){
        $data = peminjaman::find($id);
        $data->delete();
        toastr()->error('Peminjam Berhasil Didelete');
        return redirect('data-peminjam');
    }


    public function kembaliPeminjam(Request $request){
        $number = mt_rand(100, 999);
        $kodePinjam = 'KEM00'.$number;
        DB::table('kembali_pinjam')->insert([
            'no_pinjam'=>$kodePinjam,
            'nama_pinjam'=>$request->nama_pinjam,
            'judul_buku'=>$request->judul_buku,
            'tanggal_pinjam'=>$request->tanggal_pinjam,
            'tanggal_kembali'=>$request->tanggal_kembali,
            'submit_by'=>$request->submit_by,
            'status'=>'InActive',
        ]);
        toastr()->success('Peminjaman Berhenti');
        return redirect('data-peminjam');
    }
}
