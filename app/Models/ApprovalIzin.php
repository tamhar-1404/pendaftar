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
        'sekolah',
        'email',
        'dari',
        'sampai',
        'keterangan',
        'deskripsi',
        'bukti',
        'status'
        ];
}
