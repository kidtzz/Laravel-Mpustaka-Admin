<?php

namespace Database\Seeders;

use App\Models\buku as ModelsBuku;
use Illuminate\Database\Seeder;

class Buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModelsBuku::create([
            'name'=>'Admin Mpustaka',
            'email'=>'admin',
           `judul`=>'testing',
           	`deskripsi`=>'lorem',
            	`pengarang`=> 'zabiq',
                	`penerbit`=>'kole',
                    	`tahunTerbit`=>'2022',
                        	`gambar`=>'null',
                            	`jmlhHalaman`=>'123',	
        ]);
        
    }
}
