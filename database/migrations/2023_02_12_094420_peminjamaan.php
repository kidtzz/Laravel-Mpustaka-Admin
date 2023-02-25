<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peminjamaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('no_pinjam');
            $table->string('nama_pinjam')->nullable();
            $table->string('judul_buku')->nullable();
            $table->date('tanggal_pinjam'); 
            $table->date('tanggal_kembali');
            $table->string('submit_by');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
