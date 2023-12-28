<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\ApprovalIzin;
use App\Models\Siswa;
use Carbon\Carbon;


class AbsensiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:absensi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate absensi entries for students who have not submitted';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hariIni = Carbon::now()->format('l');
        $tanggal = Carbon::now()->format('Y-m-d');

        if ($hariIni != 'Saturday' && $hariIni != 'Sunday') {

            $approv = ApprovalIzin::where('tanggal', $tanggal)->count();

            if ($approv === 0) {
                $siswa_sudah_absen = ApprovalIzin::where('tanggal', $tanggal)->pluck('siswa_id')->toArray();
                $siswa_belum_jurnal = Siswa::where('role', 'siswa')->whereNotIn('id', $siswa_sudah_absen)->get();

                foreach ($siswa_belum_jurnal as $siswa) {
                    ApprovalIzin::create([
                        'siswa_id' => $siswa->id,
                        'tanggal' => $tanggal,
                        'keterangan' => 'Alfa',
                        'jam' => Carbon::now()->format('H:i'),
                        'status' => 'terimaabsen'
                    ]);
                }
            }
        }
        $this->info('Absensi entries generated successfully.');
        return 0;

}
}
