<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ApprovalIzin extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama',
        'foto',
        'sekolah',
        'email',
        'dari',
        'sampai',
        'keterangan',
        'deskripsi',
        'bukti',
        'tanggal',
        'jam',
        'status',
        'status2',
        'siswa_id'
        ];


        public function Siswa()
        {
            return $this->belongsTo(Siswa::class, 'siswa_id');
        }
}
