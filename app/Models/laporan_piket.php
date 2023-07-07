<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_piket extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','waktu','hari','deskripsi','bukti',
    ];
}
