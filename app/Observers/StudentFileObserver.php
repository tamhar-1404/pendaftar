<?php

namespace App\Observers;

use App\Models\StudentFile;
use Faker\Provider\Uuid;

class StudentFileObserver
{
    /**
     * Handle the StudentFile "creating" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function creating(StudentFile $studentFile)
    {
        $studentFile->id = Uuid::uuid();
    }

    /**
     * Handle the StudentFile "created" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function created(StudentFile $studentFile)
    {
        //
    }

    /**
     * Handle the StudentFile "updated" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function updated(StudentFile $studentFile)
    {
        //
    }

    /**
     * Handle the StudentFile "deleted" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function deleted(StudentFile $studentFile)
    {
        //
    }

    /**
     * Handle the StudentFile "restored" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function restored(StudentFile $studentFile)
    {
        //
    }

    /**
     * Handle the StudentFile "force deleted" event.
     *
     * @param  \App\Models\StudentFile  $studentFile
     * @return void
     */
    public function forceDeleted(StudentFile $studentFile)
    {
        //
    }
}
