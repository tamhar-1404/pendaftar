<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiligentStudent extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'day', 'attendance_id'];
    protected $guarded = [];

    /**
     * student
     *
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'student_id', 'id');
    }

    /**
     * attendance
     *
     * @return BelongsTo
     */
    public function attendance(): BelongsTo
    {
        return $this->belongsTo(Attendance::class);
    }
}
