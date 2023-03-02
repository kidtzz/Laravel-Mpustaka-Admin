<?php

namespace Database\Seeders;

use App\Models\anggota;
use App\Models\berita;
use App\Models\buku;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class insertDBSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name'=>'Admin Mpustaka',
            'email'=>'admin',
            'password'=> bcrypt('1'),
            'remember_token'=> Str::random(60),
        ]);
        buku::create([
            'deskripsi'=>Str::random(10),
            'pengarang'=> Str::random(10),
            'penerbit'=>Str::random(10),
            'kode_buku'=>'BK'.random_int(100,500),
            'judul'=>'Buku-'.Str::random(5),
            'tahunTerbit'=>Carbon::now(),
            'jmlhHalaman'=>random_int(100,500),
            'gambar'=>Str::random(10),
        ]);
        anggota::create([
            'name'=>'Admin-'.Str::random(2),
            'email'=>Str::random(5).'@gmail.com',
        ]);
        berita::create([
            'judul'=>'Berita tentang'.Str::random(5),
            'deskripsi'=>'Admin',
            'kategori'=>"kegiatan",
            'gambar'=>"test",
            'user'=>"admin",
            'kategori'=>Str::random(5),
        ]);
    }
}
