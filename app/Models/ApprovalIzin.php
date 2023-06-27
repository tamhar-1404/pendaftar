<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalIzin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'sekolah',
        'dari',
        'sampai',
        'keterangan',
        'deskripsi',
        'bukti',
        'status'
        ];
}
