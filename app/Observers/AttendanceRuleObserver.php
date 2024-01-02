<?php

namespace App\Observers;

use App\Models\AttendanceRule;
use Faker\Provider\Uuid;

class AttendanceRuleObserver
{
    /**
     * Handle the AttendanceRule "creating" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function creating(AttendanceRule $attendanceRule)
    {
        $attendanceRule->id = Uuid::uuid();
    }

    /**
     * Handle the AttendanceRule "created" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function created(AttendanceRule $attendanceRule)
    {
        //
    }

    /**
     * Handle the AttendanceRule "updated" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function updated(AttendanceRule $attendanceRule)
    {
        //
    }

    /**
     * Handle the AttendanceRule "deleted" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function deleted(AttendanceRule $attendanceRule)
    {
        //
    }

    /**
     * Handle the AttendanceRule "restored" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function restored(AttendanceRule $attendanceRule)
    {
        //
    }

    /**
     * Handle the AttendanceRule "force deleted" event.
     *
     * @param  \App\Models\AttendanceRule  $attendanceRule
     * @return void
     */
    public function forceDeleted(AttendanceRule $attendanceRule)
    {
        //
    }
}
