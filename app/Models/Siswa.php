<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    use HasFactory;

    // protected $table = 'siswa';
    protected $fillable = [
        'foto_siswa','name','jurusan','status_sp','email','no','role','magang_awal','magang_akhir','sekolah','jeniskelamin','tempat','tanggal','nisn','alamat','kelas', 'status'
    ];
    public function piket()
    {
        return $this->belongsTo(piket::class);
    }
    public function anggota_piket()
    {
        return $this->belongsTo(anggota_piket::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function Approvalizin()
    {
        return $this->HasMany(Approvalizin::class);
    }

    /**
     * Get all of the comments for the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function absens(): HasMany
    {
        return $this->hasMany(ApprovalIzin::class);
    }

    public function jurnals(): HasMany
    {
        return $this->hasMany(Jurnalsiswa::class);
    }

    /**
     * studentFile
     *
     * @return HasOne
     */
    public function studentFile(): HasOne
    {
        return $this->hasOne(StudentFile::class, 'student_id');
    }

    /**
     * attendances
     *
     * @return HasMany
     */
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'student_id', 'id');
    }
}
