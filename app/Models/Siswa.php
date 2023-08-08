<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // protected $table = 'siswa';
    protected $fillable = [
        'foto_siswa','name','jurusan','status_sp','email','no','role','magang_awal','magang_akhir','sekolah','jeniskelamin','tempat','tanggal','nisn','alamat','kelas', 'status'
    ];
    public function piket()
    {
        return $this->belongsTo(piket::class);
    }
    public function anggota_piket()
    {
        return $this->belongsTo(anggota_piket::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function Approvalizin()
    {
        return $this->HasMany(Approvalizin::class);
    }
}
