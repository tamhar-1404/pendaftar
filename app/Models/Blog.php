<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
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

    public function likedByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
