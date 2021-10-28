<?php

namespace App\Console\Commands\Queue;

use Illuminate\Console\Command;
use App\Services\Experiment\Queue;

class MoveQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:move';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes, moves queue members';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $service = new Queue();
        $service->removeExpired();
        return 0;
    }
}
