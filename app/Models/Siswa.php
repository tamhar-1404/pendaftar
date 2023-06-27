<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto','nama','jurusan','status_sp','email','no','role','awal','akhir','sekolah','jk','tempat_lahir','tanggal_lahir','nisn','alamat','kelas'
    ];
}
