<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Support\Str; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{

    
    public function index(){
       
        $countBuku = DB::table('buku')->count();
        $countPeminjam = DB::table('peminjaman')->count();
        $countAnggota = DB::table('anggota')->count();
        $countBerita = DB::table('berita')->count();
        $userData = peminjaman::select(DB::raw("COUNT(*) as count"))
                        ->whereYear('tanggal_kembali', date('Y'))
                        ->groupBy(DB::raw("Day(tanggal_kembali)"))
                        ->pluck('count');
                        
        $list_berita = berita::select('judul','user','created_at')->skip(0)->take(5)->get();

    return view("pages.dashboard",compact('countBuku','countPeminjam','countAnggota','countBerita','userData','list_berita'));
    } 
 
}
