<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru_admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'image',
        'sekolah',
        'email',
        'alamat',
        'no',
        'password',
        'status'
        ];
}
