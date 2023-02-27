<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $countBuku = DB::table('buku')->count();
        $countPeminjam = DB::table('peminjaman')->count();
        $countAnggota = DB::table('anggota')->count();
        $countBerita = DB::table('berita')->count();
        $userData = User::select(DB::raw("COUNT(*) as count"))
                        ->whereYear('created_at', date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('count');
        return view("pages.dashboard",compact('countBuku','countPeminjam','countAnggota','countBerita','userData'));
    } 
 
}
