<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aproval extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'tempat',
        'tanggal',
        'kelas',
        'nisn',
        'jeniskelamin',
        'alamat',
        'sekolah',
        'jurusan',
        'magang_awal',
        'magang_akhir',
        'foto_siswa',
        'sp_diri',
        'sp_ortu',
        'skck',
        'cv',
        'email',
        'password',
        'role',
        'status',
    ];

}
