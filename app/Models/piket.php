<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piket extends Model
{
    use HasFactory;
    protected $fillable = [
        'waktu','hari','nama_siswa'
    ];
}
