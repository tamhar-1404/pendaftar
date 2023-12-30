<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentFile extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'student_files';
    public $incrementing = false;
    public $keyType = 'char';
    protected $fillable = ['student_id', 'sp_diri', 'sp_ortu', 'skck', 'cv'];

    /**
     * student
     *
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'student_id', 'id');
    }
}
