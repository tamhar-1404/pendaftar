<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnalsiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','tanggal','sekolah','kegiatan', 'image', 'status'
    ];
}
