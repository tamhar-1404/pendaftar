<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_siswa','name','jurusan','status_sp','email','no','role','magang_awal','magang_akhir','sekolah','jeniskelamin','tempat','tanggal','nisn','alamat','kelas'
    ];
}
