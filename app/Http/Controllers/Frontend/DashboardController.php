<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function noted(){
        return view("pages.noted");
    }
    public function index(){
        $countBuku = DB::table('buku')->count();
        $countPeminjam = DB::table('peminjaman')->count();
        $countAnggota = DB::table('anggota')->count();
        $countBerita = DB::table('berita')->count();
        return view("pages.dashboard",compact('countBuku','countPeminjam','countAnggota','countBerita'));
        
        // $countBerita = DB::table('buku')->count();
        // $countPengunjung = DB::table('buku')->count();
        // $countPeminjam = DB::table('buku')->count();
        // return view("pages.dashboard",compact('countBuku','countBerita','countPengunjung','countPeminjam'));
    } 
 
}
