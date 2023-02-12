<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Seeder;

class BukuSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        buku::truncate();
        buku::create([
            'deskripsi'=>'testing',
            'pengarang'=> 'testing',
            'penerbit'=>'testing',
            'gambar'=>NULL,

        ]);
    }
}
