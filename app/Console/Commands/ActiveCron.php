<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Event;

class ActiveCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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
      // \Log::info("Cron is working fine!");

      $current_time = date('Y-m-d'); // if you expiry date formate is diffrent get current date accordingly.
      Event::where('start_date', '<', $current_time)->update(['is_active'=>false]);
    }
}
