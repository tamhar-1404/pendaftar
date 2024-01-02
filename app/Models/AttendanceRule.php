<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRule extends Model
{
    use HasFactory;
    protected $table = 'attendance_rules';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';

    protected $fillable = ['id', 'day', 'checkin_starts', 'checkin_ends', 'break_starts', 'break_ends', 'checkout_starts', 'return_starts', 'return_ends', 'checkout_ends'];
    protected $guarded = [];
}
