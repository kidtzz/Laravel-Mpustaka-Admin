<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->integer('nomor_phone')->nullable();
            $table->string('alamat')->nullable();
            $table->string('daerah')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('jenis_kelamin')->nullable();
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
