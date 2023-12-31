<?php

namespace App\Console;

use App\Models\ApprovalIzin;
use App\Models\Jurnalsiswa;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
      protected $commands = [
        \App\Console\Commands\JurnalCommand::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('entities:delete-expired')->daily();
        $schedule->command('command:jurnal')->dailyAt('23:59');
        $schedule->command('command:absensi')->dailyAt('23:59');
        $schedule->command('command:Lulus')->dailyAt('16:00');
    }
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
