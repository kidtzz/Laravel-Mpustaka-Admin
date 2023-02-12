<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = "anggota";
    protected $primaryKey = "id";
    protected $fillable = ['id','name','email','image','tgl_lahir','nomor_phone','alamat','daerah','jabatan','jenis_kelamin'];

	


}
