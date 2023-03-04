<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateKembaliPinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembali_pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('no_kembali');
            $table->string('nama_pinjam')->nullable();
            $table->string('judul_buku')->nullable();
            $table->date('tanggal_pinjam'); 
            $table->date('tanggal_kembali');
            $table->string('submit_by');
            $table->string('status');      
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kembali_pinjam');
    }
}
