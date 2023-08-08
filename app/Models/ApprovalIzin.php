<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ApprovalIzin extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];


        public function Siswa()
        {
            return $this->belongsTo(Siswa::class, 'siswa_id');
        }
}
