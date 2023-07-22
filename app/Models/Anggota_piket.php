<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota_piket extends Model
{
    use HasFactory;
    protected $fillable = [
        'waktu','hari','siswa_id'
    ];
    protected $primaryKey = 'siswa_id';
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
