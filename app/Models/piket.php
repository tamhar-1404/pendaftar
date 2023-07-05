<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piket extends Model
{
    use HasFactory;
    // protected $table = 'piket';
    protected $fillable = [
        'waktu','hari','siswa_id'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
