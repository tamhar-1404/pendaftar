<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'foto',
        'judul',
        'keterangan',
        'tanggal',
        'deskripsi',
        'files',
        'foto_id',
        'kategori'
    ];
    // protected $dates = [
    //     'created_at'
    // ];
}
