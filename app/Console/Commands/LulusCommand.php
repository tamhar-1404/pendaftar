<?php

namespace App\Console\Commands;


use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailLulus;
class LulusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Lulus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $Today = Carbon::now()->format('Y-m-d');
        $data = Siswa::where('magang_akhir', $Today)->Where('role', 'siswa')->get();
        foreach ($data as $item) {
            $user = Siswa::findOrFail($item->id);
            $user->update([
                'role' => 'alumni',
                'status' => 'lulus'
            ]);
            Mail::to($item->email)->send(new EmailLulus);
        };
        $this->info('Ada Siswa Yang Lulus.');
        return 0;
    }
}
