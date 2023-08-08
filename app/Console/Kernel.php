<?php

namespace App\Console;

use App\Models\Chat;
use App\Models\Siswa;
use App\Models\Jurnalsiswa;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('entities:delete-expired')->daily();
        $schedule->call(function (Schedule $schedule): void
        {
            $siswa = [
                'Kader'
            ];
                Chat::create();
                Jurnalsiswa::create([
                    'image' => "Tidak mengisi",
                    'nama' => 'k',
                    'tanggal' => now(),
                    'sekolah' => 'k',
                    'kegiatan' => "Tidak mengisi",
                    'status' => 'Tidak mengisi'
                ]);
        })->everyMinute();
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
