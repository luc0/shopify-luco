<?php

namespace App\Console\Commands;

use App\Jobs\CheckOutOfStockJob;
use Illuminate\Console\Command;

class CheckOutOfStockCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-out-of-stock-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check out of stock products';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(new CheckOutOfStockJob());
        $this->info('Done.');
    }
}
