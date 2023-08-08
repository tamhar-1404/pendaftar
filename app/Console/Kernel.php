<?php

namespace App\Console;

use App\Models\ApprovalIzin;
use App\Models\Chat;
use App\Models\Siswa;
use Carbon\Carbon;
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
        $schedule->call(function (Schedule $schedule): void
        {
            $hariIni = Carbon::now()->format('l');
            $tanggal = Carbon::now()->format('Y-m-d');
            if ($hariIni != 'Saturday' OR $hariIni != 'Sunday') {
                $sudah_absen = ApprovalIzin::where('tanggal', $tanggal)->where('status', 'terimaabsen')->pluck('nama')->toArray();
                $semua_siswa = Siswa::where('role', 'siswa')->whereNot('name', $sudah_absen)->exists();
                if ($semua_siswa) {
                    foreach ($semua_siswa->get() as $siswa) {
                        ApprovalIzin::create([
                            'nama' => $siswa->name,
                            'sekolah' => $siswa->sekolah,
                            'tanggal' => $tanggal,
                            'jam' => Carbon::now()->format('H:i'),
                            'keterangan' => 'Alfa',
                            'status' => 'terimaabsen',
                        ]);
                    }
                }
            }
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
