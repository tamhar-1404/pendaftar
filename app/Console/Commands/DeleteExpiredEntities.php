<?php

namespace App\Console\Commands;

use App\Models\ApprovalIzin;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DeleteExpiredEntities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entities:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete entities older than specified time.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $expirationTime = Carbon::now()->subDays(7); // Batasan waktu, misalnya 7 hari
        ApprovalIzin::where('created_at', '<', $expirationTime)->delete();
        $this->info('Expired entities deleted successfully.');
    }
}
