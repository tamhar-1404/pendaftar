<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function likedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes', 'blog_id', 'user_id');
    }

    public function like()
    {
        $this->likes()->attach(auth()->user()->id);
        $this->increment('likes_count'); // Tambahkan 1 ke jumlah suka
    }

    public function unlike()
    {
        $this->likes()->detach(auth()->user()->id);
        $this->decrement('likes_count'); // Kurangi 1 dari jumlah suka
    }

    public function isLikedByUser()
    {
        return $this->likedBy->contains('id', auth()->user()->id);
    }
}
