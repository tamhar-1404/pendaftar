<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Jurnalsiswa;
use App\Models\Siswa;
use Carbon\Carbon;

class JurnalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:jurnal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate journal entries for students who have not submitted';

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
            $siswa_sudah = Jurnalsiswa::where('tanggal', $tanggal)->pluck('siswa_id')->toArray();
            $siswa_belum = Siswa::where('role', 'siswa')->whereNotIn('id', $siswa_sudah)->get();
            foreach ($siswa_belum as $siswa) {
                Jurnalsiswa::create([
                    'siswa_id' => $siswa->id,
                    'tanggal' => $tanggal,
                    'kegiatan' => 'Kosong',
                    'image' => 'Kosong.png',
                    'status' => 'Tidak mengisi',
                ]);
            }
        }

        $this->info('Jurnal entries generated successfully.');

        return 0;
    }
}
