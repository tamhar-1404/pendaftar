<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnalsiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','tanggal','sekolah','kegiatan', 'image', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
