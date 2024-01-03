<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * student
     *
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'student_id');
    }

    /**
     * detailAttendance
     *
     * @return HasMany
     */
    public function detailAttendances(): HasMany
    {
        return $this->hasMany(AttendanceDetail::class);
    }
}
